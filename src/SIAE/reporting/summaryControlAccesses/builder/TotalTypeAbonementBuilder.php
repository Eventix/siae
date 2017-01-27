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
     * Type of the abonement title.
     * Allowed values:
     * I1 - Intero
     * MC - Meseum Card
     * TC - Tourist Card
     * Find out more in the TAB 3.
     * @param $totalAbonementType
     * @return $this
     */
    public function totalAbonementType($totalAbonementType)
    {
        $this->totalTypeAbonement->setTotalAbonementType($totalAbonementType);
        return $this;
    }


    /**
     * Total of the Abonement inserted in LTA.
     * (VT+VD+ZT+ZD+MT+MD+AT+AD+DT+DD+FT+FD+BT+BD)
     * @param $totalTitleAboLTA
     * @return $this
     */
    public function totalTitleAboLTA($totalTitleAboLTA)
    {
        $this->totalTypeAbonement->setTotalTitleAboLTA($totalTitleAboLTA);
        return $this;
    }


    /**
     * Set total not validated access traditional titles.
     * Corresponding to code "VT".
     * @param $totalTraditionalTitlesAboN
     * @return $this
     */
    public function totalTraditionalTitlesAboN($totalTraditionalTitlesAboN)
    {
        $this->totalTypeAbonement->setTotalTraditionalTitlesAboN($totalTraditionalTitlesAboN);
        return $this;
    }

    /**
     * Set total not validated access digital titles.
     * Corresponding to code "VD".
     * @param $totalDigitalAccessTitlesAboN
     * @return $this
     */
    public function totalDigitalAccessTitlesAboN($totalDigitalAccessTitlesAboN)
    {
        $this->totalTypeAbonement->setTotalDigitalAccessTitlesAboN($totalDigitalAccessTitlesAboN);
        return $this;
    }

    /**
     * Set total automatic access traditional titles.
     * Corresponding to code "ZT".
     * @param $totalAutomaticTraditionalAccessTitles
     * @return $this
     */
    public function totalAutomaticTraditionalAccessTitles($totalAutomaticTraditionalAccessTitles)
    {
        $this->totalTypeAbonement->setTotalAutomaticTraditionalAccessTitles($totalAutomaticTraditionalAccessTitles);
        return $this;
    }

    /**
     * Set total automatic access digital titles.
     * Corresponding to code "ZD".
     * @param $totalAutomaticDigitalAccessTitles
     * @return $this
     */
    public function totalAutomaticDigitalAccessTitles($totalAutomaticDigitalAccessTitles)
    {
        $this->totalTypeAbonement->setTotalAutomaticDigitalAccessTitles($totalAutomaticDigitalAccessTitles);
        return $this;
    }

    /**
     * Set total manual access traditional titles.
     * Corresponding to code "MT"
     * @param $totalTitlesManualTraditionalAbonement
     * @return $this
     */
    public function totalTitlesManualTraditionalAbonement($totalTitlesManualTraditionalAbonement)
    {
        $this->totalTypeAbonement->setTotalTitlesManualTraditionalAbonement($totalTitlesManualTraditionalAbonement);
        return $this;
    }

    /**
     * Set total manual access digital titles.
     * Corresponding to code "MD"
     * @param $totalTitlesManualDigitalAbonement
     * @return $this
     */
    public function totalTitlesManualDigitalAbonement($totalTitlesManualDigitalAbonement)
    {
        $this->totalTypeAbonement->setTotalTitlesManualDigitalAbonement($totalTitlesManualDigitalAbonement);
        return $this;
    }

    /**
     * Set total traditional nulled titles.
     * Corresponding to code "AT".
     * @param $totalTitlesTraditionalNulled
     * @return $this
     */
    public function totalTitlesTraditionalNulled($totalTitlesTraditionalNulled)
    {
        $this->totalTypeAbonement->setTotalTitlesTraditionalNulled($totalTitlesTraditionalNulled);
        return $this;
    }

    /**
     * Set total traditional nulled titles.
     * Corresponding to code "AD".
     * @param $totalTitlesDigitalNulled
     * @return $this
     */
    public function totalTitlesDigitalNulled($totalTitlesDigitalNulled)
    {
        $this->totalTypeAbonement->setTotalDigitalAccessTitlesAboN($totalTitlesDigitalNulled);
        return $this;
    }


    /**
     * Set total traditional blocked titles.
     * Corresponding to code "DT".
     * @param $totalTitlesAbonementTraditionalBlocked
     * @return $this
     */
    public function totalTitlesAbonementTraditionalBlocked($totalTitlesAbonementTraditionalBlocked)
    {
        $this->totalTypeAbonement->setTotalTitlesAbonementTraditionalBlocked($totalTitlesAbonementTraditionalBlocked);
        return $this;
    }

    /**
     * Set total digital blocked titles.
     * Corresponding to code "DD".
     * @param $totalTitlesAbonementDigitalBlocked
     * @return $this
     */
    public function totalTitlesAbonementDigitalBlocked($totalTitlesAbonementDigitalBlocked)
    {
        $this->totalTypeAbonement->setTotalTitlesAbonementDigitalBlocked($totalTitlesAbonementDigitalBlocked);
        return $this;
    }

    /**
     * Set total traditional stolen/lost titles.
     * Corresponding to code "FT".
     * @param $totalTitlesTraditionalStolen
     * @return $this
     */
    public function totalTitlesTraditionalStolen($totalTitlesTraditionalStolen)
    {
        $this->totalTypeAbonement->setTotalTitlesTraditionalStolen($totalTitlesTraditionalStolen);
        return $this;
    }


    /**
     * Set total digital stolen/lost titles.
     * Corresponding to code "FD".
     * @param $totalTitlesDigitalStolen
     * @return $this
     */
    public function totalTitlesDigitalStolen($totalTitlesDigitalStolen)
    {
        $this->totalTypeAbonement->setTotalTitlesDigitalStolen($totalTitlesDigitalStolen);
        return $this;
    }


    /**
     * Set total traditional BlackListed titles.
     * Corresponding to code "BD".
     * @param $totalTitlesTraditionalAbonements
     * @return $this
     */
    public function totalTitlesTraditionalAbonements($totalTitlesTraditionalAbonements)
    {
        $this->totalTypeAbonement->setTotalTitlesTraditionalAbonementsBLD($totalTitlesTraditionalAbonements);
        return $this;
    }

    /**
     * Set total digital BlackListed titles.
     * Corresponding to code "BT".
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