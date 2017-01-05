<?php

namespace SIAE\reporting\summaryControlAccesses\model;

use SIAE\common\builder\IBuilder;

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
     * @param $totalTitleLTA int
     * @return $this
     */
    public function totalTitleLTA($totalTitleLTA)
    {
        $this->totalTypeTitle->setTotalTitleLTA($totalTitleLTA);
        return $this;
    }

    /**
     * @param $totalTraditionalTitlesN int
     * @return $this
     */
    public function totalTraditionalTitlesN($totalTraditionalTitlesN)
    {
        $this->totalTypeTitle->setTotalTraditionalTitlesN($totalTraditionalTitlesN);
        return $this;
    }

    /**
     * @param $totalDigitalAccessTitlesN int
     * @return $this
     */
    public function totalDigitalAccessTitlesN($totalDigitalAccessTitlesN)
    {
        $this->totalTypeTitle->setTotalDigitalAccessTitlesN($totalDigitalAccessTitlesN);
        return $this;
    }

    /**
     * @param $totalAutomaticTraditionalTitles int
     * @return $this
     */
    public function totalAutomaticTraditionalTitles($totalAutomaticTraditionalTitles)
    {
        $this->totalTypeTitle->setTotalAutomaticTraditionalTitles($totalAutomaticTraditionalTitles);
        return $this;
    }

    /**
     * @param $totalAutomaticDigitalTitles int
     * @return $this
     */
    public function totalAutomaticDigitalTitles($totalAutomaticDigitalTitles)
    {
        $this->totalTypeTitle->setTotalAutomaticDigitalTitles($totalAutomaticDigitalTitles);
        return $this;
    }

    /**
     * @param $totalTitlesManualTraditional int
     * @return $this
     */
    public function totalTitlesManualTraditional($totalTitlesManualTraditional)
    {
        $this->totalTypeTitle->setTotalTitlesManualTraditional($totalTitlesManualTraditional);
        return $this;
    }

    /**
     * @param $totalTitlesManualDigital int
     * @return $this
     */
    public function totalTitlesManualDigital($totalTitlesManualDigital)
    {
        $this->totalTypeTitle->setTotalTitlesManualDigital($totalTitlesManualDigital);
        return $this;
    }

    /**
     * @param $totalTitlesTraditionalNulled int
     * @return $this
     */
    public function totalTitlesTraditionalNulled($totalTitlesTraditionalNulled)
    {
        $this->totalTypeTitle->setTotalTitlesTraditionalNulled($totalTitlesTraditionalNulled);
        return $this;
    }

    /**
     * @param $totalTitlesDigitalNulled int
     * @return $this
     */
    public function totalTitlesDigitalNulled($totalTitlesDigitalNulled)
    {
        $this->totalTypeTitle->setTotalTitlesDigitalNulled($totalTitlesDigitalNulled);
        return $this;
    }

    /**
     * @param $totalTitlesTraditionalBlocked int
     * @return $this
     */
    public function totalTitlesTraditionalBlocked($totalTitlesTraditionalBlocked)
    {
        $this->totalTypeTitle->setTotalTitlesTraditionalBlocked($totalTitlesTraditionalBlocked);
        return $this;
    }

    /**
     * @param $totalTitlesDigitalBlocked int
     * @return $this
     */
    public function totalTitlesDigitalBlocked($totalTitlesDigitalBlocked)
    {
        $this->totalTypeTitle->setTotalTitlesDigitalBlocked($totalTitlesDigitalBlocked);
        return $this;
    }

    /**
     * @param $totalTitlesTraditionalStolen int
     * @return $this
     */
    public function totalTitlesTraditionalStolen($totalTitlesTraditionalStolen)
    {
        $this->totalTypeTitle->setTotalTitlesTraditionalStolen($totalTitlesTraditionalStolen);
        return $this;
    }

    /**
     * @param $totalTitlesDigitalStolen int
     * @return $this
     */
    public function totalTitlesDigitalStolen($totalTitlesDigitalStolen)
    {
        $this->totalTypeTitle->setTotalTitlesDigitalStolen($totalTitlesDigitalStolen);
        return $this;
    }

    /**
     * @param $totalTitlesTraditionalBLD int
     * @return $this
     */
    public function totalTitlesTraditionalBLD($totalTitlesTraditionalBLD)
    {
        $this->totalTypeTitle->setTotalTitlesTraditionalBLD($totalTitlesTraditionalBLD);
        return $this;
    }

    /**
     * @param $totalTitlesDigitalBLD int
     * @return $this
     */
    public function totalTitlesDigitalBLD($totalTitlesDigitalBLD)
    {
        $this->totalTypeTitle->setTotalTitlesDigitalBLD($totalTitlesDigitalBLD);
        return $this;
    }

    /**
     * @param $totalType string
     * @return $this
     */
    public function totalType($totalType)
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