<?php

namespace SIAE\validator;

use SIAE\common\validator\DTDValidator;

/**
 * Class LtaValidator - can be used to validate Lta reports.
 * @package SIAE\validator
 */
class LtaValidator
{
    /**
     * @var DTDValidator
     */
    private $validator;

    public function __construct()
    {
        $this->validator = new DTDValidator("templates/dtd/Lta_v0001_20081106.dtd");
    }

    /**
     * @param $serializedXML
     * @return bool
     */
    public function validate($serializedXML)
    {
        return $this->validator->validate($serializedXML, "LTA_Giornaliera");
    }
}