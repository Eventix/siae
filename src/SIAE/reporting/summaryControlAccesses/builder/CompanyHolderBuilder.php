<?php

namespace SIAE\reporting\summaryControlAccesses\builder;

use SIAE\reporting\summaryControlAccesses\model\CompanyHolder;
use SIAE\common\builder\IBuilder;

class CompanyHolderBuilder implements IBuilder
{
    /**
     * @var CompanyHolder
     */
    private $companyHolder;

    public function __construct()
    {
        $this->companyHolder = new CompanyHolder();
    }

    /**
     * Name or denomination of the Activation Card Holder.
     * @param $denominationHolderCA
     * @return $this
     */
    public function denominationHolderCA($denominationHolderCA)
    {
        $this->companyHolder->setDenominationHolderCA($denominationHolderCA);
        return $this;
    }

    /**
     * Fiscal code of the Activation Card Holder.
     * @param $fiscalCodeHolderCA
     * @return $this
     */
    public function fiscalCodeHolderCA($fiscalCodeHolderCA)
    {
        $this->companyHolder->setFiscalCodeHolderCA($fiscalCodeHolderCA);
        return $this;
    }

    /**
     * Activation code of the activation card.
     * @param $systemCodeCA
     * @return $this
     */
    public function systemCodeCA($systemCodeCA)
    {
        $this->companyHolder->setSystemCodeCA($systemCodeCA);
        return $this;
    }

    /**
     * Date for this summary.
     * Format is YYYYMMDD.
     * @param $dateSummary
     * @return $this
     */
    public function dateSummary($dateSummary)
    {
        $this->companyHolder->setDateSummary($dateSummary);
        return $this;
    }

    /**
     * Date on which this summary was created.
     * Format is YYYYMMDD.
     * @param $dateSummaryGeneration
     * @return $this
     */
    public function dateSummaryGeneration($dateSummaryGeneration)
    {
        $this->companyHolder->setDateSummaryGeneration($dateSummaryGeneration);
        return $this;
    }

    /**
     * Time at which the summary was created.
     * Format is
     * @param $timeSummaryGeneration
     * @return $this
     */
    public function timeSummaryGeneration($timeSummaryGeneration)
    {
        $this->companyHolder->setTimeSummaryGeneration($timeSummaryGeneration);
        return $this;
    }

    /**
     * Auto incremented number for this summary.
     * @param $autoIncrementedSummary
     * @return $this
     */
    public function autoIncrementedSummary($autoIncrementedSummary)
    {
        $this->companyHolder->setAutoIncrementedSummary($autoIncrementedSummary);
        return $this;
    }

    /**
     * @return CompanyHolder
     */
    public function build()
    {
        return $this->companyHolder;
    }
}