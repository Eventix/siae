<?php

namespace SIAE\reporting\summaryControlAccesses\model;

use SIAE\common\builder\IBuilder;

class TotalTypeAbonementBuilder implements IBuilder
{
    /**
     * @var TotalTypeAbonement
     */
    private $totalTypeAbonement;

    public function __construct()
    {
        $this->totalTypeAbonement = new TotalTypeAbonement();
    }


    /**
     * @param $totalAbonementType
     * @return $this
     */
    public function totalAbonementType($totalAbonementType)
    {
        $this->totalTypeAbonement->setTotalAbonementType($totalAbonementType);
        return $this;
    }


    /**
     * @param $totalTitleAboLTA
     * @return $this
     */
    public function totalTitleAboLTA($totalTitleAboLTA)
    {
        $this->totalTypeAbonement->setTotalTitleAboLTA($totalTitleAboLTA);
        return $this;
    }


    /**
     * @param $totalTraditionalTitlesAboN
     * @return $this
     */
    public function totalTraditionalTitlesAboN($totalTraditionalTitlesAboN)
    {
        $this->totalTypeAbonement->setTotalTraditionalTitlesAboN($totalTraditionalTitlesAboN);
        return $this;
    }

    /**
     * @param $totalDigitalAccessTitlesAboN
     * @return $this
     */
    public function totalDigitalAccessTitlesAboN($totalDigitalAccessTitlesAboN)
    {
        $this->totalTypeAbonement->setTotalDigitalAccessTitlesAboN($totalDigitalAccessTitlesAboN);
        return $this;
    }

    /**
     * @param $totalAutomaticTraditionalAccessTitles
     * @return $this
     */
    public function totalAutomaticTraditionalAccessTitles($totalAutomaticTraditionalAccessTitles)
    {
        $this->totalTypeAbonement->setTotalAutomaticTraditionalAccessTitles($totalAutomaticTraditionalAccessTitles);
        return $this;
    }

    /**
     * @param $totalAutomaticDigitalAccessTitles
     * @return $this
     */
    public function totalAutomaticDigitalAccessTitles($totalAutomaticDigitalAccessTitles)
    {
        $this->totalTypeAbonement->setTotalAutomaticDigitalAccessTitles($totalAutomaticDigitalAccessTitles);
        return $this;
    }

    /**
     * @param $totalTitlesManualTraditionalAbonement
     * @return $this
     */
    public function totalTitlesManualTraditionalAbonement($totalTitlesManualTraditionalAbonement)
    {
        $this->totalTypeAbonement->setTotalTitlesManualTraditionalAbonement($totalTitlesManualTraditionalAbonement);
        return $this;
    }

    /**
     * @param $totalTitlesManualDigitalAbonement
     * @return $this
     */
    public function totalTitlesManualDigitalAbonement($totalTitlesManualDigitalAbonement)
    {
        $this->totalTypeAbonement->setTotalTitlesManualDigitalAbonement($totalTitlesManualDigitalAbonement);
        return $this;
    }

    /**
     * @param $totalTitlesTraditionalNulled
     * @return $this
     */
    public function totalTitlesTraditionalNulled($totalTitlesTraditionalNulled)
    {
        $this->totalTypeAbonement->setTotalTitlesTraditionalNulled($totalTitlesTraditionalNulled);
        return $this;
    }

    /**
     * @param $totalTitlesDigitalNulled
     * @return $this
     */
    public function totalTitlesDigitalNulled($totalTitlesDigitalNulled)
    {
        $this->totalTypeAbonement->setTotalDigitalAccessTitlesAboN($totalTitlesDigitalNulled);
        return $this;
    }


    /**
     * @param $totalTitlesAbonementTraditionalBlocked
     * @return $this
     */
    public function totalTitlesAbonementTraditionalBlocked($totalTitlesAbonementTraditionalBlocked)
    {
        $this->totalTypeAbonement->setTotalTitlesAbonementTraditionalBlocked($totalTitlesAbonementTraditionalBlocked);
        return $this;
    }

    /**
     * @param $totalTitlesAbonementDigitalBlocked
     * @return $this
     */
    public function totalTitlesAbonementDigitalBlocked($totalTitlesAbonementDigitalBlocked)
    {
        $this->totalTypeAbonement->setTotalTitlesAbonementDigitalBlocked($totalTitlesAbonementDigitalBlocked);
        return $this;
    }

    /**
     * @param $totalTitlesTraditionalStolen
     * @return $this
     */
    public function totalTitlesTraditionalStolen($totalTitlesTraditionalStolen)
    {
        $this->totalTypeAbonement->setTotalTitlesTraditionalStolen($totalTitlesTraditionalStolen);
        return $this;
    }


    /**
     * @param $totalTitlesDigitalStolen
     * @return $this
     */
    public function totalTitlesDigitalStolen($totalTitlesDigitalStolen)
    {
        $this->totalTypeAbonement->setTotalTitlesDigitalStolen($totalTitlesDigitalStolen);
        return $this;
    }


    /**
     * @param $totalTitlesTraditionalAbonements
     * @return $this
     */
    public function totalTitlesTraditionalAbonements($totalTitlesTraditionalAbonements)
    {
        $this->totalTypeAbonement->setTotalTitlesTraditionalAbonements($totalTitlesTraditionalAbonements);
        return $this;
    }

    /**
     * @param $totalTitlesAbonementDigitalBLD
     * @return $this
     */
    public function totalTitlesAbonementDigitalBLD($totalTitlesAbonementDigitalBLD)
    {
        $this->totalTypeAbonement->setTotalTitlesAbonementDigitalBLD($totalTitlesAbonementDigitalBLD);
        return $this;
    }

    /**
     * @return TotalTypeAbonement returns the newly built object
     */
    public function build()
    {
        return $this->totalTypeAbonement;
    }
}