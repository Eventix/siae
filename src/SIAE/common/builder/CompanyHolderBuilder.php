<?php

namespace SIAE\common\builder;


use SIAE\common\model\CompanyHolder;

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
     * Name of the Owner
     * Company -> Name of the Company
     * Organizer -> Name of the Organizer
     *
     * @param mixed $classification
     * @return CompanyHolderBuilder
     */
    public function classification($classification)
    {
        $this->companyHolder->setClassification($classification);
        return $this;
    }

    /**
     * @param mixed $fiscalCode
     * @return CompanyHolderBuilder
     */
    public function fiscalCode($fiscalCode)
    {
        $this->companyHolder->setFiscalCode($fiscalCode);
        return $this;
    }

    /**
     * SIAE Code from the issueing Ticketing Company
     *
     * @param mixed $distributedSystem
     * @return CompanyHolderBuilder
     */
    public function distributionSystem($distributedSystem)
    {
        $this->companyHolder->setDistributionSystem($distributedSystem);
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