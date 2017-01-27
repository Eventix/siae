<?php

namespace SIAE\common\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("Abbonamenti") */
class Subscriptions
{
    /** @SerializedName("CodiceAbbonamento") */
    private $code;
    /** @SerializedName("Validita") */
    private $validity;
    /** @SerializedName("TipoTassazione") */
    private $taxationType;
    /** @SerializedName("Turno") */
    private $turn;
    /** @SerializedName("CodiceOrdine") */
    private $orderCode;
    /** @SerializedName("TipoTitolo") */
    private $titleType;
    /** @SerializedName("QuantitaEventiAbilitati") */
    private $amountOfValidatedEvent;
    /** @SerializedName("AbbonamentiEmessi") */
    private $releasedSubscriptions;
    /** @SerializedName("AbbonamentiAnnullati") */
    private $nulledSubscriptions;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getValidity()
    {
        return $this->validity;
    }

    /**
     * @param mixed $validity
     */
    public function setValidity($validity)
    {
        $this->validity = $validity;
    }

    /**
     * @return mixed
     */
    public function getTaxationType()
    {
        return $this->taxationType;
    }

    /**
     * @param mixed $taxationType
     */
    public function setTaxationType($taxationType)
    {
        $this->taxationType = $taxationType;
    }

    /**
     * @return mixed
     */
    public function getTurn()
    {
        return $this->turn;
    }

    /**
     * @param mixed $turn
     */
    public function setTurn($turn)
    {
        $this->turn = $turn;
    }

    /**
     * @return mixed
     */
    public function getOrderCode()
    {
        return $this->orderCode;
    }

    /**
     * @param mixed $orderCode
     */
    public function setOrderCode($orderCode)
    {
        $this->orderCode = $orderCode;
    }

    /**
     * @return mixed
     */
    public function getTitleType()
    {
        return $this->titleType;
    }

    /**
     * @param mixed $titleType
     */
    public function setTitleType($titleType)
    {
        $this->titleType = $titleType;
    }

    /**
     * @return mixed
     */
    public function getAmountOfValidatedEvent()
    {
        return $this->amountOfValidatedEvent;
    }

    /**
     * @param mixed $amountOfValidatedEvent
     */
    public function setAmountOfValidatedEvent($amountOfValidatedEvent)
    {
        $this->amountOfValidatedEvent = $amountOfValidatedEvent;
    }

    /**
     * @return mixed
     */
    public function getReleasedSubscriptions()
    {
        return $this->releasedSubscriptions;
    }

    /**
     * @param mixed $releasedSubscriptions
     */
    public function setReleasedSubscriptions($releasedSubscriptions)
    {
        $this->releasedSubscriptions = $releasedSubscriptions;
    }

    /**
     * @return mixed
     */
    public function getNulledSubscriptions()
    {
        return $this->nulledSubscriptions;
    }

    /**
     * @param mixed $nulledSubscriptions
     */
    public function setNulledSubscriptions($nulledSubscriptions)
    {
        $this->nulledSubscriptions = $nulledSubscriptions;
    }


}