<?php

namespace SIAE\reporting\transactionLog\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

use SIAE\common\model\Turn;

/** @XmlRoot("Abbonamento") */
class Abonement
{
    /**
     * @SerializedName("CodiceLocale")
     * @var string
     */
    private $localCode;
    /**
     * @SerializedName("DataEvento")
     * @var string
     */
    private $eventDate;
    /**
     * @SerializedName("CodiceLocale")
     * @var string
     */
    private $eventTime;
    /**
     * @SerializedName("TipoGenere")
     * @var string
     */
    private $genreType;
    /**
     * @SerializedName("Titolo")
     * @var string
     */
    private $title;
    /**
     * @SerializedName("CodiceAbbonamento")
     * @var string
     */
    private $abonementCode;
    /**
     * @SerializedName("ProgressivoAbbonamento")
     * @var string
     */
    private $incrementedAbonementCounter;
    /**
     * @SerializedName("CodiceFiscale")
     * @var string
     */
    private $fiscalCode;
    /**
     * @SerializedName("ImportoFigurativo")
     * @var string
     */
    private $notionalAmount;
    /**
     * @SerializedName("IVAFigurativa")
     * @var string
     */
    private $notionalVAT;
    /**
     * @SerializedName("Turno")
     * @var Turn
     */
    private $turn;
    /**
     * @SerializedName("QuantitaEventiAbilitati")
     */
    private $quantityEnabledEvents;

    /**
     * @SerializedName("Validita")
     */
    private $validity;
    /**
     * @SerializedName("Rateo")
     */
    private $accrual;
    /**
     * @SerializedName("RateoIntrattenimento")
     */
    private $entertainmentAccrual;
    /**
     * @SerializedName("RateoIVA")
     */
    private $VATAccrual;
    /**
     * @SerializedName("CorrispettivoLordo")
     */
    private $gross;
    /**
     * @SerializedName("Prevendita")
     */
    private $preSale;
    /**
     * @SerializedName("IVACorrispettivo")
     */
    private $VAT;
    /**
     * @SerializedName("IVAPrevendita")
     */
    private $preSaleVAT;

    /**
     * @return mixed
     */
    public function getQuantityEnabledEvents()
    {
        return $this->quantityEnabledEvents;
    }

    /**
     * @param mixed $quantityEnabledEvents
     */
    public function setQuantityEnabledEvents($quantityEnabledEvents)
    {
        $this->quantityEnabledEvents = $quantityEnabledEvents;
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
    public function getAccrual()
    {
        return $this->accrual;
    }

    /**
     * @param mixed $accrual
     */
    public function setAccrual($accrual)
    {
        $this->accrual = $accrual;
    }

    /**
     * @return mixed
     */
    public function getEntertainmentAccrual()
    {
        return $this->entertainmentAccrual;
    }

    /**
     * @param mixed $entertainmentAccrual
     */
    public function setEntertainmentAccrual($entertainmentAccrual)
    {
        $this->entertainmentAccrual = $entertainmentAccrual;
    }

    /**
     * @return mixed
     */
    public function getVATAccrual()
    {
        return $this->VATAccrual;
    }

    /**
     * @param mixed $VATAccrual
     */
    public function setVATAccrual($VATAccrual)
    {
        $this->VATAccrual = $VATAccrual;
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
    public function getVAT()
    {
        return $this->VAT;
    }

    /**
     * @param mixed $VAT
     */
    public function setVAT($VAT)
    {
        $this->VAT = $VAT;
    }

    /**
     * @return mixed
     */
    public function getPreSaleVAT()
    {
        return $this->preSaleVAT;
    }

    /**
     * @param mixed $preSaleVAT
     */
    public function setPreSaleVAT($preSaleVAT)
    {
        $this->preSaleVAT = $preSaleVAT;
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
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Date of the event.
     * The format is YYYYMMDD.
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
     * Time of the event.
     * The format is HHMMSS.
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
     * Genere della manifestazione
     * E.G: cinema, teatro, calcio or musica.
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
    public function getAbonementCode()
    {
        return $this->abonementCode;
    }

    /**
     * @param mixed $abonementCode
     */
    public function setAbonementCode($abonementCode)
    {
        $this->abonementCode = $abonementCode;
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

    /**
     * @return Turn
     */
    public function getTurn()
    {
        return $this->turn;
    }

    /**
     * @param Turn $turn
     */
    public function setTurn($turn)
    {
        $this->turn = $turn;
    }


}