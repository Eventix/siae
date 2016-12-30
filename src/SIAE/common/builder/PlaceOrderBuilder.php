<?php

namespace SIAE\common\builder;


use SIAE\common\model\PlaceOrder;

class PlaceOrderBuilder implements IBuilder
{
    /**
     * @var PlaceOrder
     */
    private $placeOrder;

    public function __construct()
    {
        $this->placeOrder = new PlaceOrder();
    }

    /**
     * @param mixed $code
     * @return $this PlaceOrderBuilder
     */
    public function code($code)
    {
        $this->placeOrder->setCode($code);
        return $this;
    }

    /**
     * @param mixed $capacity
     * @return $this PlaceOrderBuilder
     */
    public function capacity($capacity)
    {
        $this->placeOrder->setCapacity($capacity);
        return $this;
    }

    /**
     * @param mixed $accessTitle
     * @return $this PlaceOrderBuilder
     */
    public function accessTitle($accessTitle)
    {
        $this->placeOrder->setAccessTitle($accessTitle);
        return $this;
    }

    /**
     * @param mixed $subscriptionTicket
     * @return $this PlaceOrderBuilder
     */
    public function subscriptionTicket($subscriptionTicket)
    {
        $this->placeOrder->setSubscriptionTicket($subscriptionTicket);
        return $this;
    }

    /**
     * @param $VATExceedingOffers
     * @return $this
     */
    public function VATExceedingOffers($VATExceedingOffers)
    {
        $this->placeOrder->setVATExceedingOffers($VATExceedingOffers);
        return $this;
    }


    /**
     * @return PlaceOrder
     */
    public function build()
    {
        return $this->placeOrder;
    }
}