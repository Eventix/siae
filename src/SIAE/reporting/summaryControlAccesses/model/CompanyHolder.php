<?php

namespace SIAE\reporting\summaryControlAccesses\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("Titolare") */
class CompanyHolder
{
    /**
     * @SerializedName("DenominazioneTitolareCA")
     * @var string
     */
    private $denominationHolderCA;
    /**
     * @SerializedName("CFTitolareCA")
     * @var string
     */
    private $fiscalCodeHolderCA;
    /**
     * @SerializedName("CodiceSistemaCA")
     * @var string
     */
    private $systemCodeCA;
    /**
     * @SerializedName("DataRiepilogo")
     * @var string
     */
    private $dateSummary;
    /**
     * @SerializedName("DataGenerazioneRiepilogo")
     * @var string
     */
    private $dateSummaryGeneration;
    /**
     * @SerializedName("OraGenerazioneRiepilogo")
     * @var string
     */
    private $timeSummaryGeneration;
    /**
     * @SerializedName("ProgressivoRiepilogo")
     * @var string
     */
    private $autoIncrementedSummary;

    /**
     * @return string
     */
    public function getDenominationHolderCA()
    {
        return $this->denominationHolderCA;
    }

    /**
     * @param string $denominationHolderCA
     */
    public function setDenominationHolderCA($denominationHolderCA)
    {
        $this->denominationHolderCA = $denominationHolderCA;
    }

    /**
     * @return string
     */
    public function getFiscalCodeHolderCA()
    {
        return $this->fiscalCodeHolderCA;
    }

    /**
     * @param string $fiscalCodeHolderCA
     */
    public function setFiscalCodeHolderCA($fiscalCodeHolderCA)
    {
        $this->fiscalCodeHolderCA = $fiscalCodeHolderCA;
    }

    /**
     * @return string
     */
    public function getSystemCodeCA()
    {
        return $this->systemCodeCA;
    }

    /**
     * @param string $systemCodeCA
     */
    public function setSystemCodeCA($systemCodeCA)
    {
        $this->systemCodeCA = $systemCodeCA;
    }

    /**
     * @return string
     */
    public function getDateSummary()
    {
        return $this->dateSummary;
    }

    /**
     * @param string $dateSummary
     */
    public function setDateSummary($dateSummary)
    {
        $this->dateSummary = $dateSummary;
    }

    /**
     * @return string
     */
    public function getDateSummaryGeneration()
    {
        return $this->dateSummaryGeneration;
    }

    /**
     * @param string $dateSummaryGeneration
     */
    public function setDateSummaryGeneration($dateSummaryGeneration)
    {
        $this->dateSummaryGeneration = $dateSummaryGeneration;
    }

    /**
     * @return string
     */
    public function getTimeSummaryGeneration()
    {
        return $this->timeSummaryGeneration;
    }

    /**
     * @param string $timeSummaryGeneration
     */
    public function setTimeSummaryGeneration($timeSummaryGeneration)
    {
        $this->timeSummaryGeneration = $timeSummaryGeneration;
    }

    /**
     * @return string
     */
    public function getAutoIncrementedSummary()
    {
        return $this->autoIncrementedSummary;
    }

    /**
     * @param string $autoIncrementedSummary
     */
    public function setAutoIncrementedSummary($autoIncrementedSummary)
    {
        $this->autoIncrementedSummary = $autoIncrementedSummary;
    }


}