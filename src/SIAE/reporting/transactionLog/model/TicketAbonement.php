<?php

namespace SIAE\reporting\transactionLog\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("BigliettoAbbonamento") */
class TicketAbonement
{
    /** @SerializedName("Annullamento") */
    private $isNulled;
    /** @SerializedName("CodiceAbbonamento") */
    private $code;
    /** @SerializedName("DataEvento") */
    private $eventDate;
    /** @SerializedName("OraEvento") */
    private $eventTime;
    /** @SerializedName("TipoGenere") */
    private $genreType;
    /** @SerializedName("Titolo") */
    private $title;
    /** @SerializedName("CodiceLocale") */
    private $localCode;
    /** @SerializedName("ProgressivoAbbonamento") */
    private $incrementedAbonementCounter;
    /** @SerializedName("CodiceFiscale") */
    private $fiscalCode;
    /** @SerializedName("ImportoFigurativo") */
    private $notionalAmount;
    /** @SerializedName("IVAFigurativa") */
    private $notionalVAT;

    /**
     * @return mixed
     */
    public function getIsNulled()
    {
        return $this->isNulled;
    }

    /**
     * @param mixed $isNulled
     */
    public function setIsNulled($isNulled)
    {
        $this->isNulled = $isNulled;
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
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * @param mixed $eventDate
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
    }

    /**
     * @return mixed
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * @param mixed $eventTime
     */
    public function setEventTime($eventTime)
    {
        $this->eventTime = $eventTime;
    }

    /**
     * @return mixed
     */
    public function getGenreType()
    {
        return $this->genreType;
    }

    /**
     * @param mixed $genreType
     */
    public function setGenreType($genreType)
    {
        $this->genreType = $genreType;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $titolo
     */
    public function setTitle($titolo)
    {
        $this->title = $titolo;
    }

    /**
     * @return mixed
     */
    public function getLocalCode()
    {
        return $this->localCode;
    }

    /**
     * @param mixed $localCode
     */
    public function setLocalCode($localCode)
    {
        $this->localCode = $localCode;
    }

    /**
     * @return mixed
     */
    public function getIncrementedAbonementCounter()
    {
        return $this->incrementedAbonementCounter;
    }

    /**
     * @param mixed $incrementedAbonementCounter
     */
    public function setIncrementedAbonementCounter($incrementedAbonementCounter)
    {
        $this->incrementedAbonementCounter = $incrementedAbonementCounter;
    }

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