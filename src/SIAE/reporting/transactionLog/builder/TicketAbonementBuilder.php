<?php

namespace SIAE\reporting\transactionLog\builder;


use SIAE\common\builder\IBuilder;
use SIAE\reporting\transactionLog\model\TicketAbonement;

class TicketAbonementBuilder implements IBuilder
{
    /**
     * @var TicketAbonement
     */
    private $ticketAbonement;

    public function __construct()
    {
        $this->ticketAbonement = new TicketAbonement();
    }


    /**
     * Does this transaction relate to a cancellation?
     * @param $isNulled
     * @return $this
     */
    public function isNulled($isNulled)
    {
        $this->ticketAbonement->setIsNulled($isNulled);
        return $this;
    }


    /**
     *
     * // TODO missing on the appMisuratoriFiscali
     *
     * @param $code
     * @return $this
     */
    public function code($code)
    {
        $this->ticketAbonement->setCode($code);
        return $this;
    }


    /**
     * Date of the event.
     * Format is YYYYMMDD.
     * @param $eventDate
     * @return $this
     */
    public function eventDate($eventDate)
    {
        $this->ticketAbonement->setEventDate($eventDate);
        return $this;
    }


    /**
     * Time of the event.
     * Format is HHMM.
     * @param $eventTime
     * @return $this
     */
    public function eventTime($eventTime)
    {
        $this->ticketAbonement->setEventTime($eventTime);
        return $this;
    }


    /**
     * @param $genreType
     * @return $this
     */
    public function genreType($genreType)
    {
        $this->ticketAbonement->setGenreType($genreType);
        return $this;
    }


    /**
     * @param $title
     * @return $this
     */
    public function title($title)
    {
        $this->ticketAbonement->setTitolo($title);
        return $this;

    }


    /**
     * @param $localCode
     * @return $this
     */
    public function localCode($localCode)
    {
        $this->ticketAbonement->setLocalCode($localCode);
        return $this;
    }


    /**
     * @param $incrementedAbonementCounter
     * @return $this
     */
    public function incrementedAbonementCounter($incrementedAbonementCounter)
    {
        $this->ticketAbonement->setIncrementedAbonementCounter($incrementedAbonementCounter);
        return $this;
    }

    /**
     * @param $fiscalCode
     * @return $this
     */
    public function fiscalCode($fiscalCode)
    {
        $this->ticketAbonement->setFiscalCode($fiscalCode);
        return $this;
    }


    /**
     * @param $notionalAmount
     * @return $this
     */
    public function notionalAmount($notionalAmount)
    {
        $this->ticketAbonement->setNotionalAmount($notionalAmount);
        return $this;
    }


    /**
     * @param $notionalVAT
     * @return $this
     */
    public function notionalVAT($notionalVAT)
    {
        $this->ticketAbonement->setNotionalVAT($notionalVAT);
        return $this;
    }


    /**
     * @return TicketAbonement returns the newly built object
     */
    public function build()
    {
        return $this->ticketAbonement;
    }

}