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
     * @param mixed $gross
     * @return CompanyHolderBuilder
     */
    public function classification($classification)
    {
        $this->companyHolder->setClassification($classification);
        return $this;
    }

    /**
     * @param mixed $preSale
     * @return CompanyHolderBuilder
     */
    public function fiscalCode($fiscalCode)
    {
        $this->companyHolder->setFiscalCode($fiscalCode);
        return $this;
    }

    /**
     * @param mixed $VATequivalent
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