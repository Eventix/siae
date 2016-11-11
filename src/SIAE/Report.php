<?php

namespace SIAE;

class Report
{
    protected $requiredProperties = [];
    protected $properties;
    protected $valid = false;
    protected $data;
    protected $lines = [];
    protected $appendedData = [];

    protected static $validReports = [
        'DailyReport',
    ];

    protected $varPrefix = '%_';
    protected $varSuffix = '_%';

    const TYPE_NAMESPACE = "SIAE\\";
    const TEMPLATES_DIR = __DIR__ . '/templates/';

    /**
     * Report constructor.
     * Validates the required parameters
     * @param $data
     */
    public function __construct($data) {
        $this->data = new BuildClass();
        $this->data->massSet($data);
        $properties = $this->data;
        $notSets = [];
        $this->valid = array_reduce($this->requiredProperties, function ($carry, $item) use ($properties, &$notSets) {
            if ($carry === false)
                return false;

            $bool = $properties->has($item);

            if(!$bool)
                $notSets[] = $item;

            return $bool;

        }, true);

        if (!$this->isValid())
            throw new \Exception('Properties: '. implode(', ', $notSets) . ' not set');
    }

    /**
     * Inits the body of the Report
     *
     * @param null $name
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    public static final function start($name = null, $data = []){
        if($name == null)
            throw new \Exception('Set a report name');

        if(!in_array($name, self::$validReports))
            throw new \Exception('Not a valid report name');

        $type = self::TYPE_NAMESPACE . $name;

        $object = new $type($data);

        return $object;
    }

    public function addReportLine($type = null, $data = []){
        if($type == null)
            throw new \Exception('Set a Line name');

        $object = new $type($data);

        return $object;
    }

    public function addReportLines($type = null, $data = []){
        if($type == null)
            throw new \Exception('Set a Line name');

        $lines = [];
        foreach($data as $line){
            $object = new $type($line);

            $lines[] = $object;
        }
        return $lines;

    }

    public function getRequiredProperties()
    {
        return $this->requiredProperties;
    }

    /**
     * Validates the input for current report
     * @return bool|mixed
     */
    public function isValid(){
        return $this->valid;
    }

    /**
     * Returns the current data
     *
     * @return BuildClass
     */
    public function getData() {
        return $this->data->all();
    }

    /**
     * Sets the current data
     *
     * @return BuildClass
     */
    public function setData($data) {
        $this->data = new BuildClass();
        $this->data->massSet($data);
    }

    protected function addExtraData(array $data) {
        $this->appendedData = array_merge($this->appendedData, $data);
    }

    public function replaceData($data, $content){
        $data = array_merge( (array) $data, $this->appendedData);

        // Translate Keys first
        $data = $this->tranlateKeysToItalian($data);

        $keys = [];
        foreach(array_keys($data) as $key){
            $keys[] = $this->varPrefix . strtoupper($key) . $this->varSuffix;
        }
        return str_replace($keys, $data, $content);
    }

    public function tranlateKeysToItalian($data){
//        var_dump('---------------------------');
//        var_dump($data);
        foreach($this->translatedProperties as $italianKey => $englishKey ){
            if(isset($data[$englishKey])){
                $data[$italianKey] = $data[$englishKey];
                unset($data[$englishKey]);
            }
        }
        if(isset($this->translatedLines)){
            $data = $this->unsetEnglishLines($data);
        }
//        var_dump($data);
        return $data;
    }

    /**
     * When we have some nested data we want to make sure these
     * keys are unset
     * @param $data
     * @return mixed
     */
    public function unsetEnglishLines($data){
        if(isset($this->translatedLines)){
            foreach($this->translatedLines as $italianKey => $englishKey ){
                unset($data[$englishKey]);
            }
        }
        return $data;
    }

    public function validateLinesForRender(){
        // Check if all required lines are available
        if(isset($this->requiredLines)){
            $this->data = new BuildClass();
            $this->data->massSet($this->lines);
            $existingLines = $this->data;
            $notSets = [];
            $this->valid = array_reduce($this->requiredLines, function ($carry, $item) use ($existingLines, &$notSets) {
                if ($carry === false)
                    return false;

                $bool = $existingLines->has($item);

                if(!$bool)
                    $notSets[] = $item;

                return $bool;

            }, true);
        }

        if (!$this->isValid())
            throw new \Exception('Lines: '. implode(', ', $notSets) . ' not set');
        // End validation
    }

    public function render($data, $renderType = 'xml', $template){
        $this->validateLinesForRender();

        // Render individual lines and add content to Data
        foreach($this->lines as $type => $lines){
            $lines = $this->renderLines($renderType);
            // Thus these are rendered in the dailyreport.xml as %_lines_{$type}_%
            $tranlatedType = array_search($type, $this->translatedLines);
            $this->addExtraData(['lines_'.$tranlatedType => $lines]);
        }

        if($renderType === 'xml') {
            $template = file_get_contents(self::TEMPLATES_DIR . $template);
            return $this->replaceData($data, $template);
        }
        throw new \Exception('Render Rendertype not valid');
    }
}

class BuildClass {

    private $data = [];

    public function __get($key) {
        return $this->data[$key] ?  $this->data[$key] : null;
    }

    public function __set($key, $value) {
        $this->data[$key] = $value;

        return $value;
    }

    public function massSet(array $values) {
        $this->data = array_merge($this->data, $values);
    }

    public function has($key) {
        return key_exists($key, $this->data);
    }

    function __toString() {
        return json_encode($this->data);
    }

    public function all() {
        return $this->data;
    }
}