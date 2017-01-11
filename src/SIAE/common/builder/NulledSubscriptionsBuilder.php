<?php

namespace SIAE\common\builder;

use SIAE\common\model\NulledSubscriptions;
use SIAE\common\model\ReleasedNullSubscriptions;


class NulledSubscriptionsBuilder implements IBuilder
{
    /**
     * @var NulledSubscriptions
     */
    private $nulledSubscription;

    public function __construct()
    {
        $this->nulledSubscription = new NulledSubscriptions();
    }


    /**
     * @param mixed $quantity
     * @return NulledSubscriptionsBuilder
     */
    public function quantity($type)
    {
        $this->nulledSubscription->setQuantity($type);
        return $this;
    }

    /**
     * @param mixed $gross
     * @return NulledSubscriptionsBuilder
     */
    public function gross($gross)
    {
        $this->nulledSubscription->setGross($gross);
        return $this;
    }

    /**
     * @param mixed $preSale
     * @return NulledSubscriptionsBuilder
     */
    public function preSale($preSale)
    {
        $this->nulledSubscription->setPreSale($preSale);
        return $this;
    }

    /**
     * @param mixed $VATequivalent
     * @return NulledSubscriptionsBuilder
     */
    public function VATequivalent($VATequivalent)
    {
        $this->nulledSubscription->setVATequivalent($VATequivalent);
        return $this;
    }

    /**
     * @param mixed $VATpreSale
     * @return NulledSubscriptionsBuilder
     */
    public function VATpreSale($VATpreSale)
    {
        $this->nulledSubscription->setVATpreSale($VATpreSale);
        return $this;
    }

    /**
     * @param mixed $performance
     * @return NulledSubscriptionsBuilder
     */
    public function performance($performance)
    {
        $this->nulledSubscription->setPerformanceAmount($performance);
        return $this;
    }

    /**
     * @return NulledSubscriptions
     */
    public function build()
    {
        return $this->nulledSubscription;
    }
}