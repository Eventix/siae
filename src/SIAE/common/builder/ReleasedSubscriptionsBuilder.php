<?php

namespace SIAE\common\builder;

use SIAE\common\model\ReleasedSubscriptions;

class ReleasedSubscriptionsBuilder implements IBuilder
{
    private $releasedSubscription;

    public function __construct()
    {
        $this->releasedSubscription = new ReleasedSubscriptions();
    }

    /**
     * @param mixed $quantity
     * @return ReleasedSubscriptionsBuilder
     */
    public function quantity($type)
    {
        $this->releasedSubscription->setQuantity($type);
        return $this;
    }

    /**
     * @param mixed $gross
     * @return ReleasedSubscriptionsBuilder
     */
    public function gross($gross)
    {
        $this->releasedSubscription->setGross($gross);
        return $this;
    }

    /**
     * @param mixed $preSale
     * @return ReleasedSubscriptionsBuilder
     */
    public function preSale($preSale)
    {
        $this->releasedSubscription->setPreSale($preSale);
        return $this;
    }

    /**
     * @param mixed $VATequivalent
     * @return ReleasedSubscriptionsBuilder
     */
    public function VATequivalent($VATequivalent)
    {
        $this->releasedSubscription->setVATequivalent($VATequivalent);
        return $this;
    }

    /**
     * @param mixed $VATpreSale
     * @return ReleasedSubscriptionsBuilder
     */
    public function VATpreSale($VATpreSale)
    {
        $this->releasedSubscription->setVATpreSale($VATpreSale);
        return $this;
    }

    /**
     * @param mixed $performance
     * @return ReleasedSubscriptionsBuilder
     */
    public function performance($performance)
    {
        $this->releasedSubscription->setPerformanceAmount($performance);
        return $this;
    }


    /**
     * @return ReleasedSubscriptions
     */
    public function build()
    {
        return $this->releasedSubscription;
    }
}