<?php

namespace SIAE\validator;


use SIAE\common\validator\DTDValidator;

/**
 * Class LogValidator
 * @package SIAE\validator
 */
class LogValidator
{
    /**
     * @var DTDValidator
     */
    private $validator;

    public function __construct()
    {
        $this->validator = new DTDValidator("templates/dtd/Log_v0039_20040303.dtd");
    }

    /**
     * @param $serializedXML
     * @return bool
     */
    public function validate($serializedXML)
    {
        return $this->validator->validate($serializedXML, "LogTransazione");
    }
}