<?php

namespace SIAE\common\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("Titolare") */
class CompanyHolder
{
    /** @SerializedName("Denominazione") */
    private $classification;
    /** @SerializedName("CodiceFiscale") */
    private $fiscalCode;
    /** @SerializedName("SistemaEmissione") */
    private $distributionSystem;

    /**
     * @return mixed
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * @param mixed $classification
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;
    }

    /**
     * @return mixed
     */
    public function getFiscalCode()
    {
        return $this->fiscalCode;
    }

    /**
     * @param mixed $fiscalCode
     */
    public function setFiscalCode($fiscalCode)
    {
        $this->fiscalCode = $fiscalCode;
    }

    /**
     * @return mixed
     */
    public function getDistributionSystem()
    {
        return $this->distributionSystem;
    }

    /**
     * @param mixed $distributionSystem
     */
    public function setDistributionSystem($distributionSystem)
    {
        $this->distributionSystem = $distributionSystem;
    }


}