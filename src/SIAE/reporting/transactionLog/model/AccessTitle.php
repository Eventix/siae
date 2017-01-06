<?php

namespace SIAE\reporting\transactionLog\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** @XmlRoot("TitoloAccesso") */
class AccessTitle
{
    /**
     * Allowed values are S or N.
     * @SerializedName("Annullamento")
     */
    private $isNulled;
    /** @SerializedName("TipoTitolo") */
    private $type;
    /** @SerializedName("Quantita") */
    private $quantity;
    /** @SerializedName("CorrispettivoLordo") */
    private $gross;
    /** @SerializedName("Prevendita") */
    private $preSale;
    /** @SerializedName("IVACorrispettivo") */
    private $VATequivalent;
    /** @SerializedName("IVAPrevendita") */
    private $VATpreSale;
    /** @SerializedName("IVAFigurativa") */
    private $notationalVAT;
    /** @SerializedName("CodiceLocale") */
    private $localCode;
    /** @SerializedName("DataEvento") */
    private $eventDate;
    /** @SerializedName("OraEvento") */
    private $eventTime;
    /** @SerializedName("TipoGenere") */
    private $genreType;
    /** @SerializedName("Titolo") */
    private $title;
    /** @SerializedName("Complementare") */
    private $complementary;
    /** @SerializedName("ImportoPrestazione") */
    private $performanceAmount;

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
    public function getNotationalVAT()
    {
        return $this->notationalVAT;
    }

    /**
     * @param mixed $notationalVAT
     */
    public function setNotationalVAT($notationalVAT)
    {
        $this->notationalVAT = $notationalVAT;
    }

    /**
     * @return mixed
     */
    public function getLocalCode()
    {
        return $this->localCode;
    }

    /**
     * Provided by SIAE.
     * @param mixed $localCode
     */
    public function setLocalCode($localCode)
    {
        $this->localCode = $localCode;
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
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getComplementary()
    {
        return $this->complementary;
    }

    /**
     * @param mixed $complementary
     */
    public function setComplementary($complementary)
    {
        $this->complementary = $complementary;
    }


    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
    public function getGross()
    {
        return $this->gross;
    }

    /**
     * @param mixed $gross
     */
    public function setGross($gross)
    {
        $this->gross = $gross;
    }

    /**
     * @return mixed
     */
    public function getPreSale()
    {
        return $this->preSale;
    }

    /**
     * @param mixed $preSale
     */
    public function setPreSale($preSale)
    {
        $this->preSale = $preSale;
    }

    /**
     * @return mixed
     */
    public function getVATequivalent()
    {
        return $this->VATequivalent;
    }

    /**
     * @param mixed $VATequivalent
     */
    public function setVATequivalent($VATequivalent)
    {
        $this->VATequivalent = $VATequivalent;
    }

    /**
     * @return mixed
     */
    public function getVATpreSale()
    {
        return $this->VATpreSale;
    }

    /**
     * @param mixed $VATpreSale
     */
    public function setVATpreSale($VATpreSale)
    {
        $this->VATpreSale = $VATpreSale;
    }

    /**
     * @return mixed
     */
    public function getPerformanceAmount()
    {
        return $this->performanceAmount;
    }

    /**
     * @param mixed $performanceAmount
     */
    public function setPerformanceAmount($performanceAmount)
    {
        $this->performanceAmount = $performanceAmount;
    }

}