<?php

namespace SIAE\common\builder;


use SIAE\common\model\TicketAbonements;

class TicketAbonementsBuilder implements IBuilder
{
    /**
     * @var TicketAbonements
     */
    private $ticketAbonements;

    public function __construct()
    {
        $this->ticketAbonements = new TicketAbonements();
    }


    /**
     * @param mixed $fiscalCode
     * @return TicketAbonementsBuilder
     */
    public function fiscalCode($fiscalCode)
    {
        $this->ticketAbonements->setFiscalCode($fiscalCode);
        return $this;
    }

    /**
     * @param mixed $code
     * @return TicketAbonementsBuilder
     */
    public function code($code)
    {
        $this->ticketAbonements->setCode($code);
        return $this;
    }

    /**
     * Allowed values:
     * I1 - Intero
     * MC - Meseum Card
     * TC - Tourist Card
     * Find out more in the TAB 3.
     * @param mixed $titleType
     * @return TicketAbonementsBuilder
     */
    public function titleType($titleType)
    {
        $this->ticketAbonements->setTitleType($titleType);
        return $this;
    }

    /**
     * @param mixed $quantity
     * @return TicketAbonementsBuilder
     */
    public function quantity($quantity)
    {
        $this->ticketAbonements->setQuantity($quantity);
        return $this;
    }

    /**
     * @param mixed $notionalAmount
     * @return TicketAbonementsBuilder
     */
    public function notionalAmount($notionalAmount)
    {
        $this->ticketAbonements->setNotionalAmount($notionalAmount);
        return $this;
    }

    /**
     * @param mixed $notionalVAT
     * @return TicketAbonementsBuilder
     */
    public function notionalVAT($notionalVAT)
    {
        $this->ticketAbonements->setNotionalVAT($notionalVAT);
        return $this;
    }

    /**
     * @return TicketAbonementsBuilder
     */
    public function build()
    {
        return $this->ticketAbonements;
    }
}