<?php

namespace SIAE\common\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("Intrattenimento") */
class Entertainment
{
    /** @SerializedName("TipoTassazione") */
    private $taxationType;
    /** @SerializedName("Incidenza") */
    private $incidence;

    /**
     * @return mixed
     */
    public function getTaxationType()
    {
        return $this->taxationType;
    }

    /**
     * @param mixed $taxationType
     */
    public function setTaxationType($taxationType)
    {
        $this->taxationType = $taxationType;
    }

    /**
     * @return mixed
     */
    public function getIncidence()
    {
        return $this->incidence;
    }

    /**
     * @param mixed $incidence
     */
    public function setIncidence($incidence)
    {
        $this->incidence = $incidence;
    }


}