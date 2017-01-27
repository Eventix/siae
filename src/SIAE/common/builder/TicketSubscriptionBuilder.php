<?php

namespace SIAE\common\builder;


use SIAE\common\model\TicketSubscription;
use SIAE\common\model\Turn;

class TicketSubscriptionBuilder implements IBuilder
{
    /**
     * @var TicketSubscription
     */
    private $ticketSubscription;

    public function __construct()
    {
        $this->ticketSubscription = new TicketSubscription();
    }


    /**
     * @param mixed $fiscalCode
     * @return TicketSubscriptionBuilder
     */
    public function fiscalCode($fiscalCode)
    {
        $this->ticketSubscription->setFiscalCode($fiscalCode);
        return $this;
    }

    /**
     * @param mixed $code
     * @return TicketSubscriptionBuilder
     */
    public function code($code)
    {
        $this->ticketSubscription->setCode($code);
        return $this;
    }

    /**
     * @param mixed $titleType
     * @return TicketSubscriptionBuilder
     */
    public function titleType($titleType)
    {
        $this->ticketSubscription->setTitleType($titleType);
        return $this;
    }

    /**
     * @param mixed $quantity
     * @return TicketSubscriptionBuilder
     */
    public function quantity($quantity)
    {
        $this->ticketSubscription->setQuantity($quantity);
        return $this;
    }

    /**
     * @param mixed $notionalAmount
     * @return TicketSubscriptionBuilder
     */
    public function notionalAmount($notionalAmount)
    {
        $this->ticketSubscription->setNotionalAmount($notionalAmount);
        return $this;
    }

    /**
     * @param mixed $notionalVAT
     * @return TicketSubscriptionBuilder
     */
    public function notionalVAT($notionalVAT)
    {
        $this->ticketSubscription->setNotionalVAT($notionalVAT);
        return $this;
    }

    /**
     * @return TicketSubscriptionBuilder
     */
    public function build()
    {
        return $this->ticketSubscription;
    }
}