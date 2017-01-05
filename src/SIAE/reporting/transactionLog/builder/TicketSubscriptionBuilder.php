<?php

namespace SIAE\reporting\transactionLog\builder;


use SIAE\common\builder\IBuilder;
use SIAE\reporting\transactionLog\model\TicketSubscription;

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
     * @param $isNulled
     * @return $this
     */
    public function isNulled($isNulled)
    {
        $this->ticketSubscription->setIsNulled($isNulled);
        return $this;
    }


    /**
     * @param $code
     * @return $this
     */
    public function code($code)
    {
        $this->ticketSubscription->setCode($code);
        return $this;
    }


    /**
     * @param $eventDate
     * @return $this
     */
    public function eventDate($eventDate)
    {
        $this->ticketSubscription->setEventDate($eventDate);
        return $this;
    }


    /**
     * @param $eventTime
     * @return $this
     */
    public function eventTime($eventTime)
    {
        $this->ticketSubscription->setEventTime($eventTime);
        return $this;
    }


    /**
     * @param $genreType
     * @return $this
     */
    public function genreType($genreType)
    {
        $this->ticketSubscription->setGenreType($genreType);
        return $this;
    }


    /**
     * @param $title
     * @return $this
     */
    public function title($title)
    {
        $this->ticketSubscription->setTitolo($title);
        return $this;

    }


    /**
     * @param $localCode
     * @return $this
     */
    public function localCode($localCode)
    {
        $this->ticketSubscription->setLocalCode($localCode);
        return $this;
    }


    /**
     * @param $incrementedAbonementCounter
     * @return $this
     */
    public function incrementedAbonementCounter($incrementedAbonementCounter)
    {
        $this->ticketSubscription->setIncrementedAbonementCounter($incrementedAbonementCounter);
        return $this;
    }

    /**
     * @param $fiscalCode
     * @return $this
     */
    public function fiscalCode($fiscalCode)
    {
        $this->ticketSubscription->setFiscalCode($fiscalCode);
        return $this;
    }


    /**
     * @param $notionalAmount
     * @return $this
     */
    public function notionalAmount($notionalAmount)
    {
        $this->ticketSubscription->setNotionalAmount($notionalAmount);
        return $this;
    }


    /**
     * @param $notionalVAT
     * @return $this
     */
    public function notionalVAT($notionalVAT)
    {
        $this->ticketSubscription->setNotionalVAT($notionalVAT);
        return $this;
    }


    /**
     * @return TicketSubscription returns the newly built object
     */
    public function build()
    {
        return $this->ticketSubscription;
    }

}