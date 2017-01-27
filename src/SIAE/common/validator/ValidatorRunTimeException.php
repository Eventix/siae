<?php

namespace SIAE\common\validator;


use RuntimeException;

/**
 * Exception thrown when validation fails. It is a simple wrapper used to wrap warnings and make them catchable.
 * @package SIAE\common\validator
 */
class ValidatorRunTimeException extends RuntimeException
{
    public function __construct($message = "", $code = 0, $dtdFile)
    {
        $message = "Exception thrown when validating against DTD ({$dtdFile}). Error reported: \n/" . $message;
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->message}] \n";
    }
}