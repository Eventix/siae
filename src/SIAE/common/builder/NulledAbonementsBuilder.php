<?php

namespace SIAE\common\builder;

use SIAE\common\model\NulledAbonements;


class NulledAbonementsBuilder implements IBuilder
{
    /**
     * @var NulledAbonements
     */
    private $nulledAbonements;

    public function __construct()
    {
        $this->nulledAbonements = new NulledAbonements();
    }


    /**
     * @param mixed $quantity
     * @return NulledAbonementsBuilder
     */
    public function quantity($type)
    {
        $this->nulledAbonements->setQuantity($type);
        return $this;
    }

    /**
     * @param mixed $gross
     * @return NulledAbonementsBuilder
     */
    public function gross($gross)
    {
        $this->nulledAbonements->setGross($gross);
        return $this;
    }

    /**
     * @param mixed $preSale
     * @return NulledAbonementsBuilder
     */
    public function preSale($preSale)
    {
        $this->nulledAbonements->setPreSale($preSale);
        return $this;
    }

    /**
     * @param mixed $VATequivalent
     * @return NulledAbonementsBuilder
     */
    public function VATequivalent($VATequivalent)
    {
        $this->nulledAbonements->setVATequivalent($VATequivalent);
        return $this;
    }

    /**
     * @param mixed $VATpreSale
     * @return NulledAbonementsBuilder
     */
    public function VATpreSale($VATpreSale)
    {
        $this->nulledAbonements->setVATpreSale($VATpreSale);
        return $this;
    }


    /**
     * @return NulledAbonements
     */
    public function build()
    {
        return $this->nulledAbonements;
    }
}