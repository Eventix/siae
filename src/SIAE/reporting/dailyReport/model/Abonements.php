<?php

namespace SIAE\reporting\dailyReport\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;
use SIAE\common\model\TaxationType;

/** @XmlRoot("Abbonamenti") */
class Abonements
{
    /** @SerializedName("CodiceAbbonamento") */
    private $code;
    /** @SerializedName("Validita") */
    private $validity;
    /**
     * @SerializedName("TipoTassazione")
     * @var TaxationType
     */
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
    private $releasedAbonements;
    /** @SerializedName("AbbonamentiAnnullati") */
    private $nulledAbonements;

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
     * @param mixed TaxationType $taxationType
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
     * Number of events involved in a single Abonement/Order
     *
     * @param mixed $amountOfValidatedEvent
     */
    public function setAmountOfValidatedEvent($amountOfValidatedEvent)
    {
        $this->amountOfValidatedEvent = $amountOfValidatedEvent;
    }

    /**
     * @return mixed
     */
    public function getReleasedAbonements()
    {
        return $this->releasedAbonements;
    }

    /**
     * @param mixed $releasedAbonements
     */
    public function setReleasedAbonements($releasedAbonements)
    {
        $this->releasedAbonements = $releasedAbonements;
    }

    /**
     * @return mixed
     */
    public function getNulledAbonements()
    {
        return $this->nulledAbonements;
    }

    /**
     * @param mixed $nulledAbonements
     */
    public function setNulledAbonements($nulledAbonements)
    {
        $this->nulledAbonements = $nulledAbonements;
    }


}