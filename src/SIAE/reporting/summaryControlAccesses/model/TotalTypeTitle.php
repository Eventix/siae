<?php

namespace SIAE\reporting\summaryControlAccesses\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("TotaleTipoTitolo") */
class TotalTypeTitle
{
    /**
     * @SerializedName("TipoTitolo")
     * @var string
     */
    private $totalType;

    /**
     * @SerializedName("TotaleTitoliLTA")
     * @var int
     */
    private $totalTitleLTA;

    /**
     * @SerializedName("TotaleTitoliNoAccessoTradiz")
     * @var int
     */
    private $totalTraditionalTitlesN;

    /**
     * @SerializedName("TotaleTitoliNoAccessoDigitali")
     * @var int
     */
    private $totalDigitalAccessTitlesN;

    /**
     * @SerializedName("TotaleTitoliAutomatizzatiTradiz")
     * @var int
     */
    private $totalAutomaticTraditionalTitles;

    /**
     * @SerializedName("TotaleTitoliAutomatizzatiDigitali")
     * @var int
     */
    private $totalAutomaticDigitalTitles;

    /**
     * @SerializedName("TotaleTitoliManualiTradiz")
     * @var int
     */
    private $totalTitlesManualTraditional;

    /**
     * @SerializedName("TotaleTitoliManualiDigitali")
     * @var int
     */
    private $totalTitlesManualDigital;

    /**
     * @SerializedName("TotaleTitoliAnnullatiTradiz")
     * @var int
     */
    private $totalTitlesTraditionalNulled;

    /**
     * @SerializedName("TotaleTitoliAnnullatiDigitali")
     * @var int
     */
    private $totalTitlesDigitalNulled;

    /**
     * @SerializedName("TotaleTitoliDaspatiTradiz")
     * @var int
     */
    private $totalTitlesTraditionalBlocked;

    /**
     * @SerializedName("TotaleTitoliDaspatiDigitali")
     * @var int
     */
    private $totalTitlesDigitalBlocked;

    /**
     * @SerializedName("TotaleTitoliRubatiTradiz")
     * @var int
     */
    private $totalTitlesTraditionalStolen;

    /**
     * @SerializedName("TotaleTitoliRubatiDigitali")
     * @var int
     */
    private $totalTitlesDigitalStolen;

    /**
     * @SerializedName("TotaleTitoliBLTradiz")
     * @var int
     */
    private $totalTitlesTraditionalBLD;

    /**
     * @SerializedName("TotaleTitoliBLDigitali")
     * @var int
     */
    private $totalTitlesDigitalBLD;


    /**
     * @return int
     */
    public function getTotalTitleLTA()
    {
        return $this->totalTitleLTA;
    }

    /**
     * @param int $totalTitleLTA
     */
    public function setTotalTitleLTA($totalTitleLTA)
    {
        $this->totalTitleLTA = $totalTitleLTA;
    }

    /**
     * @return int
     */
    public function getTotalTraditionalTitlesN()
    {
        return $this->totalTraditionalTitlesN;
    }

    /**
     * @param int $totalTraditionalTitlesN
     */
    public function setTotalTraditionalTitlesN($totalTraditionalTitlesN)
    {
        $this->totalTraditionalTitlesN = $totalTraditionalTitlesN;
    }

    /**
     * @return int
     */
    public function getTotalDigitalAccessTitlesN()
    {
        return $this->totalDigitalAccessTitlesN;
    }

    /**
     * @param int $totalDigitalAccessTitlesN
     */
    public function setTotalDigitalAccessTitlesN($totalDigitalAccessTitlesN)
    {
        $this->totalDigitalAccessTitlesN = $totalDigitalAccessTitlesN;
    }

    /**
     * @return int
     */
    public function getTotalAutomaticTraditionalTitles()
    {
        return $this->totalAutomaticTraditionalTitles;
    }

    /**
     * @param int $totalAutomaticTraditionalTitles
     */
    public function setTotalAutomaticTraditionalTitles($totalAutomaticTraditionalTitles)
    {
        $this->totalAutomaticTraditionalTitles = $totalAutomaticTraditionalTitles;
    }

    /**
     * @return int
     */
    public function getTotalAutomaticDigitalTitles()
    {
        return $this->totalAutomaticDigitalTitles;
    }

    /**
     * @param int $totalAutomaticDigitalTitles
     */
    public function setTotalAutomaticDigitalTitles($totalAutomaticDigitalTitles)
    {
        $this->totalAutomaticDigitalTitles = $totalAutomaticDigitalTitles;
    }

    /**
     * @return int
     */
    public function getTotalTitlesManualTraditional()
    {
        return $this->totalTitlesManualTraditional;
    }

    /**
     * @param int $totalTitlesManualTraditional
     */
    public function setTotalTitlesManualTraditional($totalTitlesManualTraditional)
    {
        $this->totalTitlesManualTraditional = $totalTitlesManualTraditional;
    }

    /**
     * @return int
     */
    public function getTotalTitlesManualDigital()
    {
        return $this->totalTitlesManualDigital;
    }

    /**
     * @param int $totalTitlesManualDigital
     */
    public function setTotalTitlesManualDigital($totalTitlesManualDigital)
    {
        $this->totalTitlesManualDigital = $totalTitlesManualDigital;
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
    public function getTotalTitlesTraditionalBlocked()
    {
        return $this->totalTitlesTraditionalBlocked;
    }

    /**
     * @param int $totalTitlesTraditionalBlocked
     */
    public function setTotalTitlesTraditionalBlocked($totalTitlesTraditionalBlocked)
    {
        $this->totalTitlesTraditionalBlocked = $totalTitlesTraditionalBlocked;
    }

    /**
     * Corresponding to code "DD".
     * @return int
     */
    public function getTotalTitlesDigitalBlocked()
    {
        return $this->totalTitlesDigitalBlocked;
    }

    /**
     * Corresponding to code "DD".
     * @param int $totalTitlesDigitalBlocked
     */
    public function setTotalTitlesDigitalBlocked($totalTitlesDigitalBlocked)
    {
        $this->totalTitlesDigitalBlocked = $totalTitlesDigitalBlocked;
    }

    /**
     * Corresponding to code "FT".
     * @return int
     */
    public function getTotalTitlesTraditionalStolen()
    {
        return $this->totalTitlesTraditionalStolen;
    }

    /**
     * Corresponding to code "FT".
     * @param int $totalTitlesTraditionalStolen
     */
    public function setTotalTitlesTraditionalStolen($totalTitlesTraditionalStolen)
    {
        $this->totalTitlesTraditionalStolen = $totalTitlesTraditionalStolen;
    }

    /**
     * Corresponding to code "FD".
     * @return int
     */
    public function getTotalTitlesDigitalStolen()
    {
        return $this->totalTitlesDigitalStolen;
    }

    /**
     * Corresponding to code "FD".
     * @param int $totalTitlesDigitalStolen
     */
    public function setTotalTitlesDigitalStolen($totalTitlesDigitalStolen)
    {
        $this->totalTitlesDigitalStolen = $totalTitlesDigitalStolen;
    }

    /**
     * Total BlackListed traditional titles.
     * Corresponding to code "BT".
     * @return int
     */
    public function getTotalTitlesTraditionalBLD()
    {
        return $this->totalTitlesTraditionalBLD;
    }

    /**
     * Total BlackListed traditional titles.
     * Corresponding to code "BT".
     * @param int $totalTitlesTraditionalBLD
     */
    public function setTotalTitlesTraditionalBLD($totalTitlesTraditionalBLD)
    {
        $this->totalTitlesTraditionalBLD = $totalTitlesTraditionalBLD;
    }

    /**
     * Total BlackListed digital titles.
     * Corresponding to code "BD".
     * @return int
     */
    public function getTotalTitlesDigitalBLD()
    {
        return $this->totalTitlesDigitalBLD;
    }

    /**
     * Set total BlackListed digital titles.
     * Corresponding to code "BD".
     * @param int $totalTitlesDigitalBLD
     */
    public function setTotalTitlesDigitalBLD($totalTitlesDigitalBLD)
    {
        $this->totalTitlesDigitalBLD = $totalTitlesDigitalBLD;
    }

    /**
     * @return string
     */
    public function getTotalType()
    {
        return $this->totalType;
    }

    /**
     * @param string $totalType
     */
    public function setTotalType($totalType)
    {
        $this->totalType = $totalType;
    }
}