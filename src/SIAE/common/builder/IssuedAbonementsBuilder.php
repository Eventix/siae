<?php

namespace SIAE\common\builder;

use SIAE\common\model\IssuedAbonements;

class IssuedAbonementsBuilder implements IBuilder
{
    private $issuedAbonements;

    public function __construct()
    {
        $this->issuedAbonements = new IssuedAbonements();
    }

    /**
     * @param mixed $quantity
     * @return IssuedAbonementsBuilder
     */
    public function quantity($type)
    {
        $this->issuedAbonements->setQuantity($type);
        return $this;
    }

    /**
     * @param mixed $gross
     * @return IssuedAbonementsBuilder
     */
    public function gross($gross)
    {
        $this->issuedAbonements->setGross($gross);
        return $this;
    }

    /**
     * @param mixed $preSale
     * @return IssuedAbonementsBuilder
     */
    public function preSale($preSale)
    {
        $this->issuedAbonements->setPreSale($preSale);
        return $this;
    }

    /**
     * @param mixed $VATequivalent
     * @return IssuedAbonementsBuilder
     */
    public function VATequivalent($VATequivalent)
    {
        $this->issuedAbonements->setVATequivalent($VATequivalent);
        return $this;
    }

    /**
     * @param mixed $VATpreSale
     * @return IssuedAbonementsBuilder
     */
    public function VATpreSale($VATpreSale)
    {
        $this->issuedAbonements->setVATpreSale($VATpreSale);
        return $this;
    }


    /**
     * @return IssuedAbonements
     */
    public function build()
    {
        return $this->issuedAbonements;
    }
}