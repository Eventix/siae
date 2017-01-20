<?php

namespace SIAE\reporting\summaryControlAccesses\builder;

use SIAE\common\builder\IBuilder;
use SIAE\reporting\summaryControlAccesses\model\TotalTypeTitle;

class TotalTypeTitleBuilder implements IBuilder
{
    /**
     * @var TotalTypeTitle
     */
    private $totalTypeTitle;

    public function __construct()
    {
        $this->totalTypeTitle = new TotalTypeTitle();
    }

    /**
     * Total of the titles inserted in LTA.
     * (VT+VD+ZT+ZD+MT+MD+AT+AD+DT+DD+FT+FD+BT+BD)
     * @param $totalTitleLTA int
     * @return $this
     */
    public function totalTitleLTA($totalTitleLTA)
    {
        $this->totalTypeTitle->setTotalTitleLTA($totalTitleLTA);
        return $this;
    }

    /**
     * Set total not validated access traditional titles.
     * Corresponding to code "VT".
     * @param $totalTraditionalTitlesN int
     * @return $this
     */
    public function totalTraditionalTitlesNotValidated($totalTraditionalTitlesN)
    {
        $this->totalTypeTitle->setTotalTraditionalTitlesN($totalTraditionalTitlesN);
        return $this;
    }

    /**
     * Set total not validated access digital titles.
     * Corresponding to code "VD".
     * @param $totalDigitalAccessTitlesN int
     * @return $this
     */
    public function totalDigitalAccessTitlesNotValidated($totalDigitalAccessTitlesN)
    {
        $this->totalTypeTitle->setTotalDigitalAccessTitlesN($totalDigitalAccessTitlesN);
        return $this;
    }

    /**
     * Set total automatic access traditional titles.
     * Corresponding to code "ZT".
     * @param $totalAutomaticTraditionalTitles int
     * @return $this
     */
    public function totalAutomaticTraditionalTitles($totalAutomaticTraditionalTitles)
    {
        $this->totalTypeTitle->setTotalAutomaticTraditionalTitles($totalAutomaticTraditionalTitles);
        return $this;
    }

    /**
     * Set total automatic access digital titles.
     * Corresponding to code "ZD".
     * @param $totalAutomaticDigitalTitles int
     * @return $this
     */
    public function totalAutomaticDigitalTitles($totalAutomaticDigitalTitles)
    {
        $this->totalTypeTitle->setTotalAutomaticDigitalTitles($totalAutomaticDigitalTitles);
        return $this;
    }

    /**
     * Set total manual access traditional titles.
     * Corresponding to code "MT"
     * @param $totalTitlesManualTraditional int
     * @return $this
     */
    public function totalTitlesManualTraditional($totalTitlesManualTraditional)
    {
        $this->totalTypeTitle->setTotalTitlesManualTraditional($totalTitlesManualTraditional);
        return $this;
    }

    /**
     * Set total manual access digital titles.
     * Corresponding to code "MD"
     * @param $totalTitlesManualDigital int
     * @return $this
     */
    public function totalTitlesManualDigital($totalTitlesManualDigital)
    {
        $this->totalTypeTitle->setTotalTitlesManualDigital($totalTitlesManualDigital);
        return $this;
    }

    /**
     * Set total traditional nulled titles.
     * Corresponding to code "AT".
     * @param $totalTitlesTraditionalNulled int
     * @return $this
     */
    public function totalTitlesTraditionalNulled($totalTitlesTraditionalNulled)
    {
        $this->totalTypeTitle->setTotalTitlesTraditionalNulled($totalTitlesTraditionalNulled);
        return $this;
    }

    /**
     * Set total traditional nulled titles.
     * Corresponding to code "AD".
     * @param $totalTitlesDigitalNulled int
     * @return $this
     */
    public function totalTitlesDigitalNulled($totalTitlesDigitalNulled)
    {
        $this->totalTypeTitle->setTotalTitlesDigitalNulled($totalTitlesDigitalNulled);
        return $this;
    }

    /**
     * Set total traditional blocked titles.
     * Corresponding to code "DT".
     * @param $totalTitlesTraditionalBlocked int
     * @return $this
     */
    public function totalTitlesTraditionalBlocked($totalTitlesTraditionalBlocked)
    {
        $this->totalTypeTitle->setTotalTitlesTraditionalBlocked($totalTitlesTraditionalBlocked);
        return $this;
    }

    /**
     * Set total digital blocked titles.
     * Corresponding to code "DD".
     * @param $totalTitlesDigitalBlocked int
     * @return $this
     */
    public function totalTitlesDigitalBlocked($totalTitlesDigitalBlocked)
    {
        $this->totalTypeTitle->setTotalTitlesDigitalBlocked($totalTitlesDigitalBlocked);
        return $this;
    }

    /**
     * Set total traditional stolen/lost titles.
     * Corresponding to code "FT".
     * @param $totalTitlesTraditionalStolen int
     * @return $this
     */
    public function totalTitlesTraditionalStolen($totalTitlesTraditionalStolen)
    {
        $this->totalTypeTitle->setTotalTitlesTraditionalStolen($totalTitlesTraditionalStolen);
        return $this;
    }

    /**
     * Set total digital stolen/lost titles.
     * Corresponding to code "FD".
     * @param $totalTitlesDigitalStolen int
     * @return $this
     */
    public function totalTitlesDigitalStolen($totalTitlesDigitalStolen)
    {
        $this->totalTypeTitle->setTotalTitlesDigitalStolen($totalTitlesDigitalStolen);
        return $this;
    }

    /**
     * Set total tradition BlackListed titles.
     * Corresponding to code "BT".
     * @param $totalTitlesTraditionalBLD int
     * @return $this
     */
    public function totalTitlesTraditionalBLD($totalTitlesTraditionalBLD)
    {
        $this->totalTypeTitle->setTotalTitlesTraditionalBLD($totalTitlesTraditionalBLD);
        return $this;
    }

    /**
     * Set total digital BlackListed titles.
     * Corresponding to code "BD".
     * @param $totalTitlesDigitalBLD int
     * @return $this
     */
    public function totalTitlesDigitalBLD($totalTitlesDigitalBLD)
    {
        $this->totalTypeTitle->setTotalTitlesDigitalBLD($totalTitlesDigitalBLD);
        return $this;
    }

    /**
     * Type of the access title.
     * Allowed values:
     * I1 - Intero
     * MC - Meseum Card
     * TC - Tourist Card
     * Find out more in the TAB 3.
     *
     * @param $totalType string
     * @return $this
     */
    public function titleType($totalType)
    {
        $this->totalTypeTitle->setTotalType($totalType);
        return $this;
    }

    /**
     * @return TotalTypeTitle returns the newly built object
     */
    public function build()
    {
        return $this->totalTypeTitle;
    }
}