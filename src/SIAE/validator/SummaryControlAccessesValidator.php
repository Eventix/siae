<?php

namespace SIAE\validator;

use SIAE\common\validator\DTDValidator;

/**
 * Class SummaryControlAccessesValidator
 * @package SIAE\validator
 */
class SummaryControlAccessesValidator
{
    /**
     * @var DTDValidator
     */
    private $validator;

    public function __construct()
    {
        $this->validator = new DTDValidator("templates/dtd/ControlloAccessi_v0001_20080626.dtd");
    }

    /**
     * @param $serializedXML
     * @return bool
     */
    public function validate($serializedXML)
    {
        return $this->validator->validate($serializedXML, "RiepilogoControlloAccessi");
    }
}