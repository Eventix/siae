<?php

namespace SIAE\common\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** @XmlRoot("Turno") */
class Turn
{
    /** @XmlAttribute
     * @SerializedName("valore")
     */
    private $value;

    /**
     * @param String $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return String
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param String $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}