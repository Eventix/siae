<?php

namespace SIAE\monthlyReport;

use SIAE\common\builder\IBuilder;
use SIAE\common\model\CompanyHolder;
use SIAE\common\model\Organizer;

/**
 * Builder for the SIAE XML mapping.
 */
class MonthlyReportBuilder implements IBuilder
{
    private $monthlyReport;

    /**
     * DailyReportBuilder constructor.
     * @param $dailyReport MonthlyReport
     */
    public function __construct($dailyReport)
    {
        $this->monthlyReport = new MonthlyReport();
    }

    /**
     * Pass in the array containing the company holder data
     * @param $companyHolder CompanyHolder
     * @return $this;
     */
    public function companyHolder($companyHolder)
    {
        $this->monthlyReport->setCompanyHolder($companyHolder);
        return $this;
    }

    /**
     * Pass in the array containing the organizer object.
     * @param $organizer Organizer
     * @return $this;
     */
    public function organizer($organizer)
    {
        $this->monthlyReport->setOrganizer($organizer);
        return $this;
    }

    /**
     * Set the date for the parent element
     * @param $date string
     * @return $this
     */
    public function date($date)
    {
        $this->monthlyReport->setDate($date);
        return $this;
    }

    /**
     * Set the creation date for the parent element
     * @param $date string
     * @return $this
     */
    public function creationDate($date)
    {
        $this->monthlyReport->setCreationDate($date);
        return $this;
    }

    /**
     * Set the generation time for the parent element
     * @param $time string
     * @return $this
     */
    public function generationTime($time)
    {
        $this->monthlyReport->setGenerationTime($time);
        return $this;
    }

    /**
     * Set the creation date for the parent element
     * @param $number integer
     * @return $this
     */
    public function generationIncrementedNumber($number)
    {
        $this->monthlyReport->setGenerationIncrementedNumber($number);
        return $this;
    }

    /**
     * Set the replacement value
     * @param $replacement string
     * @return $this
     */
    public function replacement($replacement)
    {
        $this->monthlyReport->setReplacement($replacement);
        return $this;
    }

    /**
     * @return MonthlyReport
     */
    public function build()
    {
        return $this->monthlyReport;
    }
}