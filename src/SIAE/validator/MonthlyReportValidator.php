<?php

namespace SIAE\validator;

use SIAE\common\validator\DTDValidator;

/**
 * Class DailyReportValidator - can be used to validate daily reports.
 * @package SIAE\validator
 */
class MonthlyReportValidator
{
    /**
     * @var DTDValidator
     */
    private $validator;

    public function __construct()
    {
        $this->validator = new DTDValidator("templates/dtd/RiepilogoMensile_v0039_20040209.dtd");
    }

    /**
     * @param $serializedXML
     * @return bool
     */
    public function validate($serializedXML)
    {
        return $this->validator->validate($serializedXML, "RiepilogoMensile");
    }
}