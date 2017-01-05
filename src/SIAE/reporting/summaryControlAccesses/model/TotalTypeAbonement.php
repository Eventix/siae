<?php

namespace SIAE\reporting\summaryControlAccesses\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("TotaleTipoTitoloAbbonamento") */
class TotalTypeAbonement
{
    /**
     * @SerializedName("TipoTitoloAbbonamento")
     * @var string
     */
    private $totalAbonementType;

    /**
     * @SerializedName("TotaleTitoliAbbLTA")
     * @var int
     */
    private $totalTitleAboLTA;

    /**
     * @SerializedName("TotaleTitoliAbbNoAccessoTradiz")
     * @var int
     */
    private $totalTraditionalTitlesAboN;

    /**
     * @SerializedName("TotaleTitoliAbbNoAccessoDigitali")
     * @var int
     */
    private $totalDigitalAccessTitlesAboN;

    /**
     * @SerializedName("TotaleTitoliAbbAutomatizzatiTradiz")
     * @var int
     */
    private $totalAutomaticTraditionalAccessTitles;

    /**
     * @SerializedName("TotaleTitoliAbbAutomatizzatiDigitali")
     * @var int
     */
    private $totalAutomaticDigitalAccessTitles;

    /**
     * @SerializedName("TotaleTitoliAbbManualiTradiz")
     * @var int
     */
    private $totalTitlesManualTraditionalAbonement;

    /**
     * @SerializedName("TotaleTitoliAbbManualiDigitali")
     * @var int
     */
    private $totalTitlesManualDigitalAbonement;

    /**
     * @SerializedName("TotaleTitoliAbbAnnullatiTradiz")
     * @var int
     */
    private $totalTitlesTraditionalNulled;

    /**
     * @SerializedName("TotaleTitoliAbbAnnullatiDigitali")
     * @var int
     */
    private $totalTitlesDigitalNulled;

    /**
     * @SerializedName("TotaleTitoliAbbDaspatiTradiz")
     * @var int
     */
    private $totalTitlesAbonementTraditionalBlocked;

    /**
     * @SerializedName("TotaleTitoliAbbDaspatiDigitali")
     * @var int
     */
    private $totalTitlesAbonementDigitalBlocked;

    /**
     * @SerializedName("TotaleTitoliAbbRubatiTradiz")
     * @var int
     */
    private $totalTitlesTraditionalStolen;

    /**
     * @SerializedName("TotaleTitoliAbbRubatiDigitali")
     * @var int
     */
    private $totalTitlesDigitalStolen;

    /**
     * @SerializedName("TotaleTitoliAbbBLTradiz")
     * @var int
     */
    private $totalTitlesTraditionalAbonements;

    /**
     * @SerializedName("TotaleTitoliAbbBLDigitali")
     * @var int
     */
    private $totalTitlesAbonementDigitalBLD;

    /**
     * @return string
     */
    public function getTotalAbonementType()
    {
        return $this->totalAbonementType;
    }

    /**
     * @param string $totalAbonementType
     */
    public function setTotalAbonementType($totalAbonementType)
    {
        $this->totalAbonementType = $totalAbonementType;
    }

    /**
     * @return int
     */
    public function getTotalTitleAboLTA()
    {
        return $this->totalTitleAboLTA;
    }

    /**
     * @param int $totalTitleAboLTA
     */
    public function setTotalTitleAboLTA($totalTitleAboLTA)
    {
        $this->totalTitleAboLTA = $totalTitleAboLTA;
    }

    /**
     * @return int
     */
    public function getTotalTraditionalTitlesAboN()
    {
        return $this->totalTraditionalTitlesAboN;
    }

    /**
     * @param int $totalTraditionalTitlesAboN
     */
    public function setTotalTraditionalTitlesAboN($totalTraditionalTitlesAboN)
    {
        $this->totalTraditionalTitlesAboN = $totalTraditionalTitlesAboN;
    }

    /**
     * @return int
     */
    public function getTotalDigitalAccessTitlesAboN()
    {
        return $this->totalDigitalAccessTitlesAboN;
    }

    /**
     * @param int $totalDigitalAccessTitlesAboN
     */
    public function setTotalDigitalAccessTitlesAboN($totalDigitalAccessTitlesAboN)
    {
        $this->totalDigitalAccessTitlesAboN = $totalDigitalAccessTitlesAboN;
    }

    /**
     * @return int
     */
    public function getTotalAutomaticTraditionalAccessTitles()
    {
        return $this->totalAutomaticTraditionalAccessTitles;
    }

    /**
     * @param int $totalAutomaticTraditionalAccessTitles
     */
    public function setTotalAutomaticTraditionalAccessTitles($totalAutomaticTraditionalAccessTitles)
    {
        $this->totalAutomaticTraditionalAccessTitles = $totalAutomaticTraditionalAccessTitles;
    }

    /**
     * @return int
     */
    public function getTotalAutomaticDigitalAccessTitles()
    {
        return $this->totalAutomaticDigitalAccessTitles;
    }

    /**
     * @param int $totalAutomaticDigitalAccessTitles
     */
    public function setTotalAutomaticDigitalAccessTitles($totalAutomaticDigitalAccessTitles)
    {
        $this->totalAutomaticDigitalAccessTitles = $totalAutomaticDigitalAccessTitles;
    }

    /**
     * @return int
     */
    public function getTotalTitlesManualTraditionalAbonement()
    {
        return $this->totalTitlesManualTraditionalAbonement;
    }

    /**
     * @param int $totalTitlesManualTraditionalAbonement
     */
    public function setTotalTitlesManualTraditionalAbonement($totalTitlesManualTraditionalAbonement)
    {
        $this->totalTitlesManualTraditionalAbonement = $totalTitlesManualTraditionalAbonement;
    }

    /**
     * @return int
     */
    public function getTotalTitlesManualDigitalAbonement()
    {
        return $this->totalTitlesManualDigitalAbonement;
    }

    /**
     * @param int $totalTitlesManualDigitalAbonement
     */
    public function setTotalTitlesManualDigitalAbonement($totalTitlesManualDigitalAbonement)
    {
        $this->totalTitlesManualDigitalAbonement = $totalTitlesManualDigitalAbonement;
    }

    /**
     * @return int
     */
    public function getTotalTitlesTraditionalNulled()
    {
        return $this->totalTitlesTraditionalNulled;
    }

    /**
     * @param int $totalTitlesTraditionalNulled
     */
    public function setTotalTitlesTraditionalNulled($totalTitlesTraditionalNulled)
    {
        $this->totalTitlesTraditionalNulled = $totalTitlesTraditionalNulled;
    }

    /**
     * @return int
     */
    public function getTotalTitlesDigitalNulled()
    {
        return $this->totalTitlesDigitalNulled;
    }

    /**
     * @param int $totalTitlesDigitalNulled
     */
    public function setTotalTitlesDigitalNulled($totalTitlesDigitalNulled)
    {
        $this->totalTitlesDigitalNulled = $totalTitlesDigitalNulled;
    }

    /**
     * @return int
     */
    public function getTotalTitlesAbonementTraditionalBlocked()
    {
        return $this->totalTitlesAbonementTraditionalBlocked;
    }

    /**
     * @param int $totalTitlesAbonementTraditionalBlocked
     */
    public function setTotalTitlesAbonementTraditionalBlocked($totalTitlesAbonementTraditionalBlocked)
    {
        $this->totalTitlesAbonementTraditionalBlocked = $totalTitlesAbonementTraditionalBlocked;
    }

    /**
     * @return int
     */
    public function getTotalTitlesAbonementDigitalBlocked()
    {
        return $this->totalTitlesAbonementDigitalBlocked;
    }

    /**
     * @param int $totalTitlesAbonementDigitalBlocked
     */
    public function setTotalTitlesAbonementDigitalBlocked($totalTitlesAbonementDigitalBlocked)
    {
        $this->totalTitlesAbonementDigitalBlocked = $totalTitlesAbonementDigitalBlocked;
    }

    /**
     * @return int
     */
    public function getTotalTitlesTraditionalStolen()
    {
        return $this->totalTitlesTraditionalStolen;
    }

    /**
     * @param int $totalTitlesTraditionalStolen
     */
    public function setTotalTitlesTraditionalStolen($totalTitlesTraditionalStolen)
    {
        $this->totalTitlesTraditionalStolen = $totalTitlesTraditionalStolen;
    }

    /**
     * @return int
     */
    public function getTotalTitlesDigitalStolen()
    {
        return $this->totalTitlesDigitalStolen;
    }

    /**
     * @param int $totalTitlesDigitalStolen
     */
    public function setTotalTitlesDigitalStolen($totalTitlesDigitalStolen)
    {
        $this->totalTitlesDigitalStolen = $totalTitlesDigitalStolen;
    }

    /**
     * @return int
     */
    public function getTotalTitlesTraditionalAbonements()
    {
        return $this->totalTitlesTraditionalAbonements;
    }

    /**
     * @param int $totalTitlesTraditionalAbonements
     */
    public function setTotalTitlesTraditionalAbonements($totalTitlesTraditionalAbonements)
    {
        $this->totalTitlesTraditionalAbonements = $totalTitlesTraditionalAbonements;
    }

    /**
     * @return int
     */
    public function getTotalTitlesAbonementDigitalBLD()
    {
        return $this->totalTitlesAbonementDigitalBLD;
    }

    /**
     * @param int $totalTitlesAbonementDigitalBLD
     */
    public function setTotalTitlesAbonementDigitalBLD($totalTitlesAbonementDigitalBLD)
    {
        $this->totalTitlesAbonementDigitalBLD = $totalTitlesAbonementDigitalBLD;
    }
}