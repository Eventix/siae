<?php

namespace SIAE\common\model;


use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("BigliettiAbbonamento") */
class TicketAbonements
{
    /** @SerializedName("CodiceFiscale" */
    private $fiscalCode;
    /** @SerializedName("CodiceAbbonamento") */
    private $code;
    /** @SerializedName("TipoTitolo") */
    private $titleType;
    /** @SerializedName("Quantita") */
    private $quantity;
    /** @SerializedName("ImportoFigurativo") */
    private $notionalAmount;
    /** @SerializedName("IVAFigurativa") */
    private $notionalVAT;

    /**
     * @return mixed
     */
    public function getFiscalCode()
    {
        return $this->fiscalCode;
    }

    /**
     * @param mixed $fiscalCode
     */
    public function setFiscalCode($fiscalCode)
    {
        $this->fiscalCode = $fiscalCode;
    }

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
    public function getTitleType()
    {
        return $this->titleType;
    }

    /**
     * Title type.
     * @param mixed $titleType
     */
    public function setTitleType($titleType)
    {
        $this->titleType = $titleType;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getNotionalAmount()
    {
        return $this->notionalAmount;
    }

    /**
     * @param mixed $notionalAmount
     */
    public function setNotionalAmount($notionalAmount)
    {
        $this->notionalAmount = $notionalAmount;
    }

    /**
     * @return mixed
     */
    public function getNotionalVAT()
    {
        return $this->notionalVAT;
    }

    /**
     * @param mixed $notionalVAT
     */
    public function setNotionalVAT($notionalVAT)
    {
        $this->notionalVAT = $notionalVAT;
    }

}