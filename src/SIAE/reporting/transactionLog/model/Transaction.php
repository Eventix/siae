<?php

namespace SIAE\reporting\transactionLog\model;

use SIAE\reporting\dailyTransactionLogs\model\AccessTitle;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("Transazione") */
class Transaction
{
    /**
     * @XmlAttribute
     * @SerializedName("CFOrganizzatore")
     * @var string
     */
    private $CFOrganizer;
    /**
     * @XmlAttribute
     * @SerializedName("CFTitolare")
     * @var string
     */
    private $CFOwner;
    /**
     * Allowed values are N, B or F.
     * @XmlAttribute
     * @SerializedName("IVAPreassolta")
     * @var string
     */
    private $VATreleased;
    /**
     * Allowed values are S or I.
     * @XmlAttribute
     * @SerializedName("TipoTassazione")
     * @var string
     */
    private $taxationType;
    /**
     * Allowed values are E (euro) or L (lire).
     * The euro currency must contain the last two cyphers representing the
     * euro cents.
     * @XmlAttribute
     * @SerializedName("Valuta")
     * @var string
     */
    private $currency;
    /**
     * @XmlAttribute
     * @SerializedName("SistamaEmissione")
     * @var string
     */
    private $issuingSystem;
    /**
     * @XmlAttribute
     * @SerializedName("CartaAttivazione")
     * @var string
     */
    private $activationCard;
    /**
     * @XmlAttribute
     * @SerializedName("SigilloFiscale")
     * @var string
     */
    private $fiscalSigilloCode;
    /**
     * @XmlAttribute
     * @SerializedName("DataEmissione")
     * @var string
     */
    private $issuedDate;
    /**
     * @XmlAttribute
     * @SerializedName("OraEmissione")
     * @var string
     */
    private $issuedTime;
    /**
     * @XmlAttribute
     * @SerializedName("NumeroProgressivo")
     * @var string
     */
    private $incrementedCounter;
    /**
     * @XmlAttribute
     * @SerializedName("TipoTitolo")
     * @var string
     */
    private $titleType;
    /**
     * @XmlAttribute
     * @SerializedName("OrderCode")
     * @var string
     */
    private $orderCode;
    /**
     * @XmlAttribute
     * @SerializedName("Causale")
     * @var string
     */
    private $causal;
    /**
     * @XmlAttribute
     * @SerializedName("Posto")
     * @var string
     */
    private $place;
    /**
     * @XmlAttribute
     * @SerializedName("PuntoVendita")
     * @var string
     */
    private $sellingPlace;
    /**
     * @XmlAttribute
     * @SerializedName("Prestampa")
     * @var string
     */
    private $prePrint;
    /**
     * @XmlAttribute
     * @SerializedName("ImponibileIntrattenimenti")
     * @var string
     */
    private $entertainmentTaxableIncome;
    /**
     * @XmlAttribute
     * @SerializedName("OriginaleAnnullato")
     * @var string
     */
    private $nulledOriginal;
    /**
     * @XmlAttribute
     * @SerializedName("CartaOriginaleAnnullato")
     * @var string
     */
    private $nulledOriginalCard;
    /**
     * @XmlAttribute
     * @SerializedName("CausaleAnnullamento")
     * @var string
     */
    private $nulledCausal;


    /**
     * @SerializedName("TitoloAccesso")
     * @var AccessTitle
     */
    private $accessTitle;
    /**
     * @SerializedName("Abbonamento")
     * @var Abonement
     */
    private $abonement;
    /**
     * @SerializedName("BigliettoAbbonamento")
     * @var TicketAbonement
     */
    private $ticketAbonement;


    /**
     * @return string
     */
    public function getCFOrganizer()
    {
        return $this->CFOrganizer;
    }

    /**
     * Fiscal code of the person who owns the control system.
     * @param string $CFOrganizer
     */
    public function setCFOrganizer($CFOrganizer)
    {
        $this->CFOrganizer = $CFOrganizer;
    }

    /**
     * @return string
     */
    public function getCFOwner()
    {
        return $this->CFOwner;
    }

    /**
     * @param string $CFOwner
     */
    public function setCFOwner($CFOwner)
    {
        $this->CFOwner = $CFOwner;
    }

    /**
     * @return string
     */
    public function getVATreleased()
    {
        return $this->VATreleased;
    }

    /**
     * @param string $VATreleased
     */
    public function setVATreleased($VATreleased)
    {
        $this->VATreleased = $VATreleased;
    }

    /**
     * @return string
     */
    public function getTaxationType()
    {
        return $this->taxationType;
    }

    /**
     * @param string $taxationType
     */
    public function setTaxationType($taxationType)
    {
        $this->taxationType = $taxationType;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getIssuingSystem()
    {
        return $this->issuingSystem;
    }

    /**
     * @param string $issuingSystem
     */
    public function setIssuingSystem($issuingSystem)
    {
        $this->issuingSystem = $issuingSystem;
    }

    /**
     * @return string
     */
    public function getActivationCard()
    {
        return $this->activationCard;
    }

    /**
     * @param string $activationCard
     */
    public function setActivationCard($activationCard)
    {
        $this->activationCard = $activationCard;
    }

    /**
     * @return string
     */
    public function getFiscalSigilloCode()
    {
        return $this->fiscalSigilloCode;
    }

    /**
     * @param string $fiscalSigilloCode
     */
    public function setFiscalSigilloCode($fiscalSigilloCode)
    {
        $this->fiscalSigilloCode = $fiscalSigilloCode;
    }

    /**
     * @return string
     */
    public function getIssuedDate()
    {
        return $this->issuedDate;
    }

    /**
     * @param string $issuedDate
     */
    public function setIssuedDate($issuedDate)
    {
        $this->issuedDate = $issuedDate;
    }

    /**
     * @return string
     */
    public function getIssuedTime()
    {
        return $this->issuedTime;
    }

    /**
     * @param string $issuedTime
     */
    public function setIssuedTime($issuedTime)
    {
        $this->issuedTime = $issuedTime;
    }

    /**
     * @return string
     */
    public function getIncrementedCounter()
    {
        return $this->incrementedCounter;
    }

    /**
     * @param string $incrementedCounter
     */
    public function setIncrementedCounter($incrementedCounter)
    {
        $this->incrementedCounter = $incrementedCounter;
    }

    /**
     * @return string
     */
    public function getTitleType()
    {
        return $this->titleType;
    }

    /**
     * @param string $titleType
     */
    public function setTitleType($titleType)
    {
        $this->titleType = $titleType;
    }

    /**
     * @return string
     */
    public function getOrderCode()
    {
        return $this->orderCode;
    }

    /**
     * @param string $orderCode
     */
    public function setOrderCode($orderCode)
    {
        $this->orderCode = $orderCode;
    }

    /**
     * @return string
     */
    public function getCausal()
    {
        return $this->causal;
    }

    /**
     * @param string $causal
     */
    public function setCausal($causal)
    {
        $this->causal = $causal;
    }

    /**
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param string $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return string
     */
    public function getSellingPlace()
    {
        return $this->sellingPlace;
    }

    /**
     * @param string $sellingPlace
     */
    public function setSellingPlace($sellingPlace)
    {
        $this->sellingPlace = $sellingPlace;
    }

    /**
     * @return string
     */
    public function getPrePrint()
    {
        return $this->prePrint;
    }

    /**
     * @param string $prePrint
     */
    public function setPrePrint($prePrint)
    {
        $this->prePrint = $prePrint;
    }

    /**
     * @return string
     */
    public function getEntertainmentTaxableIncome()
    {
        return $this->entertainmentTaxableIncome;
    }

    /**
     * @param string $entertainmentTaxableIncome
     */
    public function setEntertainmentTaxableIncome($entertainmentTaxableIncome)
    {
        $this->entertainmentTaxableIncome = $entertainmentTaxableIncome;
    }

    /**
     * @return string
     */
    public function getNulledOriginal()
    {
        return $this->nulledOriginal;
    }

    /**
     * @param string $nulledOriginal
     */
    public function setNulledOriginal($nulledOriginal)
    {
        $this->nulledOriginal = $nulledOriginal;
    }

    /**
     * @return string
     */
    public function getNulledOriginalCard()
    {
        return $this->nulledOriginalCard;
    }

    /**
     * @param string $nulledOriginalCard
     */
    public function setNulledOriginalCard($nulledOriginalCard)
    {
        $this->nulledOriginalCard = $nulledOriginalCard;
    }

    /**
     * @return string
     */
    public function getNulledCausal()
    {
        return $this->nulledCausal;
    }

    /**
     * @param string $nulledCausal
     */
    public function setNulledCausal($nulledCausal)
    {
        $this->nulledCausal = $nulledCausal;
    }

    /**
     * @return AccessTitle
     */
    public function getAccessTitle()
    {
        return $this->accessTitle;
    }

    /**
     * @param AccessTitle $accessTitle
     */
    public function setAccessTitle($accessTitle)
    {
        $this->accessTitle = $accessTitle;
    }

    /**
     * @return Abonement
     */
    public function getAbonement()
    {
        return $this->abonement;
    }

    /**
     * @param Abonement $abonement
     */
    public function setAbonement($abonement)
    {
        $this->abonement = $abonement;
    }

    /**
     * @return TicketAbonement
     */
    public function getTicketAbonement()
    {
        return $this->ticketAbonement;
    }

    /**
     * @param TicketAbonement $ticketAbonement
     */
    public function setTicketAbonement($ticketAbonement)
    {
        $this->ticketAbonement = $ticketAbonement;
    }

}