<?php

namespace SIAE\reporting\monthlyReport;

use SIAE\common\builder\IBuilder;
use SIAE\common\model\CompanyHolder;
use SIAE\common\model\Organizer;

/**
 * Builder for the SIAE XML mapping.
 * Monthly report. Contains information about titles,
 * abonements, events and more.
 */
class MonthlyReportBuilder implements IBuilder
{
    private $monthlyReport;

    /**
     * DailyReportBuilder constructor.
     */
    public function __construct()
    {
        $this->monthlyReport = new MonthlyReport();
    }


    /**
     * Format is YYYYMM.
     * @param $month
     * @return $this
     */
    public function month($month)
    {
        $this->monthlyReport->setMonth($month);
        return $this;
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
     * Set the creation date for the parent element.
     * @param $number integer
     * @return $this
     */
    public function generationIncrementedNumber($number)
    {
        $this->monthlyReport->setGenerationIncrementedNumber($number);
        return $this;
    }

    /**
     * Set the replacement value.
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