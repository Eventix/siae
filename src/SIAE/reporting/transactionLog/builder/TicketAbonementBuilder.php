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
     * // TODO: missing on the appMisuratoriFiscali ask regoli
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
     * Event genre.
     * It can be found in TAB 1, page 18,
     * AppMisuratoriFiscali.pdf.
     * @param $genreType
     * @return $this
     */
    public function genreType($genreType)
    {
        $this->ticketAbonement->setGenreType($genreType);
        return $this;
    }


    /**
     * Abonement title.
     * @param $title
     * @return $this
     */
    public function title($title)
    {
        $this->ticketAbonement->setTitle($title);
        return $this;

    }


    /**
     * Code of the place where the event takes place.
     * Provided by SIAE.
     * @param $localCode
     * @return $this
     */
    public function localCode($localCode)
    {
        $this->ticketAbonement->setLocalCode($localCode);
        return $this;
    }


    /**
     * Automatically incremented counter.
     * @param $incrementedAbonementCounter
     * @return $this
     */
    public function incrementedAbonementCounter($incrementedAbonementCounter)
    {
        $this->ticketAbonement->setIncrementedAbonementCounter($incrementedAbonementCounter);
        return $this;
    }

    /**
     * Fiscal code connected to the organizer.
     * @param $fiscalCode
     * @return $this
     */
    public function fiscalCode($fiscalCode)
    {
        $this->ticketAbonement->setFiscalCode($fiscalCode);
        return $this;
    }


    /**
     * // TODO: Ask regoli
     * Gross amount. It is related to the rateo
     * @param $notionalAmount
     * @return $this
     */
    public function notionalAmount($notionalAmount)
    {
        $this->ticketAbonement->setNotionalAmount($notionalAmount);
        return $this;
    }


    /**
     * VAT related to the notional amount.
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