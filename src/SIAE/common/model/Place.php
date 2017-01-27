<?php

namespace SIAE\common\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;


/** @XmlRoot("Locale") */
class Place
{
    /** @SerializedName("Denominazione") */
    private $name;
    /** @SerializedName("CodiceLocale") */
    private $placeCode;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPlaceCode()
    {
        return $this->placeCode;
    }

    /**
     * @param mixed $placeCode
     */
    public function setPlaceCode($placeCode)
    {
        $this->placeCode = $placeCode;
    }

}