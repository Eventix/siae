<?php

namespace SIAE;

class DailyReport extends Report
{
    protected $lines = [];
    protected $xml_template = 'dailyreport.xml';
    
    const LINE_NAMESPACE = "SIAE\\DailyReportLine";

    /**
     * All the properties required to create the body of a
     * Daily report, all properties in English
     *
     * @var array
     */
    protected $requiredProperties = [
        'eventCreatedAt',
    ];

    protected $translatedProperties = [
        'DataGenerazione' => 'eventCreatedAt', // Creation time of the event (? translated correctly?)
    ];

    /**
     * All the lines required to append to the body of a
     * Daily report, all lineNames in English
     *
     * @var array
     */
    protected $requiredLines = [
        'Subscriptions',
    ];

    protected $translatedLines = [
        'Abbonamenti' => 'Subscriptions', // Subscription lines
    ];

    public function __construct($data) {
        parent::__construct($data);
    }

    /**
     * Render the Type content here
     *
     * @param string $type
     */
    public function render($renderType = 'xml') {
        return parent::render($this->getData(), $renderType, $this->xml_template);
    }

    /**
     * @param $type The Line Type, to support for multiple lines sections
     * @param null $data
     * @throws \Exception
     */
    public function addLine($type, $data = null) {
        $this->lines[$type][] = $this->addReportLine(self::LINE_NAMESPACE, $data);
    }

    public function addLines($type, $data = []) {
        foreach($data as $lineData){
            $this->lines[$type][] = $this->addReportLine(self::LINE_NAMESPACE, $lineData);
        }
    }

    public function renderLines($renderType = 'xml') {
        $content = '';
        foreach($this->lines as $type => $lines){
            foreach($lines as $line){
                $content .= $line->render($type, $renderType);
            }
        }
        return $content;
    }
}