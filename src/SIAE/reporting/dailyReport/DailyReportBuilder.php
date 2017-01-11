<?php

namespace SIAE\reporting\dailyReport;

use SIAE\common\builder\IBuilder;
use SIAE\common\model\CompanyHolder;
use SIAE\common\model\Organizer;

/**
 * Builder for the SIAE XML mapping.
 */
class DailyReportBuilder implements IBuilder
{
    private $dailyReport;


    public function __construct()
    {
        $this->dailyReport = new DailyReport();
    }

    /**
     * Pass in the array containing the company holder data
     * @param $companyHolder CompanyHolder
     * @return $this;
     */
    public function companyHolder($companyHolder)
    {
        $this->dailyReport->setCompanyHolder($companyHolder);
        return $this;
    }

    /**
     * Pass in the array containing the organizer object.
     * @param Organizer $organizer
     * @return $this;
     */
    public function organizer($organizer)
    {
        $this->dailyReport->setOrganizer($organizer);
        return $this;
    }

    /**
     * The format is YYYYMMDD.
     * @param $date string
     * @return $this
     */
    public function date($date)
    {
        $this->dailyReport->setDate($date);
        return $this;
    }

    /**
     * Set the creation date for the parent element
     * @param $date string
     * @return $this
     */
    public function creationDate($date)
    {
        $this->dailyReport->setCreationDate($date);
        return $this;
    }

    /**
     * Set the generation time for the parent element
     * @param $time string
     * @return $this
     */
    public function generationTime($time)
    {
        $this->dailyReport->setGenerationTime($time);
        return $this;
    }

    /**
     * Set the creation date for the parent element
     * @param $number integer
     * @return $this
     */
    public function generationIncrementedNumber($number)
    {
        $this->dailyReport->setGenerationIncrementedNumber($number);
        return $this;
    }

    /**
     * Set the replacement value
     * Can be S or N,
     * @param $replacement string
     * @return $this
     */
    public function replacement($replacement)
    {
        $this->dailyReport->setReplacement($replacement);
        return $this;
    }

    /**
     * @return DailyReport
     */
    public function build()
    {
        return $this->dailyReport;
    }
}