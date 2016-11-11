<?php

namespace SIAE;

class DailyReportLine extends Report
{
    public $xml_template = 'dailyreport_line.xml';

    const LINE_NAMESPACE = "SIAE\\DailyReportLine";

    /**
     * All the properties required a line the body of a
     * Daily report, all properties in English
     *
     * We'll probably want this empty due to different line types!!!
     *
     * @var array
     */
    protected $requiredProperties = [

    ];

    protected $translatedProperties = [
        'CodiceAbbonamento' => 'SIAECode', // Contains the SIAE Code of the Event, please translate this accordingly
    ];

    public function __construct($data) {
        parent::__construct($data);
    }

    public function render($type, $renderType = 'xml') {
        // Determine LineTemplateType
        $template = null;

        // Create different line type reports here
        if($type == 'Subscriptions')
            $template = 'dailyreport_subscriptions.xml';

        if(is_null($template))
            throw new \Exception('Template for LineType' . $type . ' not set');

        return parent::render($this->getData(), $renderType, $template);
    }
}