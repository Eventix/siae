<?php

namespace SIAE\reporting\transactionLog\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** @XmlRoot("Complementare") */
class Complementary
{
    /** @SerializedName("ImportoPrestazione") */
    private $performanceAmount;
    /** @SerializedName("CodicePrestazione") */
    private $performanceCode;

    /**
     * @return mixed
     */
    public function getPerformanceCode()
    {
        return $this->performanceCode;
    }

    /**
     * @param mixed $performanceCode
     */
    public function setPerformanceCode($performanceCode)
    {
        $this->performanceCode = $performanceCode;
    }

    /**
     * @return mixed
     */
    public function getPerformanceAmount()
    {
        return $this->performanceAmount;
    }

    /**
     * @param mixed $performanceAmount
     */
    public function setPerformanceAmount($performanceAmount)
    {
        $this->performanceAmount = $performanceAmount;
    }
}