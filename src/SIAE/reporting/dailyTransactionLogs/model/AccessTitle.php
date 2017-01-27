<?php

namespace SIAE\reporting\dailyTransactionLogs\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** @XmlRoot("TitoloAccesso") */
class AccessTitle
{
    /**
     * @XmlAttribute
     * @SerializedName("SistemaEmissione")
     * @var string
     */
    private $issueSystem;
    /**
     * @XmlAttribute
     * @SerializedName("CartaAttivazione")
     * @var string
     */
    private $activationCard;
    /**
     * @XmlAttribute
     * @SerializedName("ProgressivoFiscale")
     * @var int
     */
    private $autoIncrementedFiscalNumber;
    /**
     * @XmlAttribute
     * @SerializedName("SigilloFiscale")
     * @var string
     */
    private $fiscalSigilloCode;
    /**
     * @XmlAttribute
     * @SerializedName("DataEmissione")
     * @var int
     */
    private $issuedDate;
    /**
     * @XmlAttribute
     * @SerializedName("OraEmissione")
     * @var int
     */
    private $issuedTime;
    /**
     * @XmlAttribute
     * @SerializedName("DataLTA")
     * @var int
     */
    private $ltaDate;
    /**
     * @XmlAttribute
     * @SerializedName("OraLTA")
     * @var int
     */
    private $ltaTime;
    /**
     * @XmlAttribute
     * @SerializedName("TipoTitolo")
     * @var string
     */
    private $titleType;
    /**
     * @XmlAttribute
     * @SerializedName("CodiceOrdine")
     * @var string
     */
    private $orderCode;
    /**
     * @XmlAttribute
     * @SerializedName("CorrispettivoLordo")
     * @var string
     */
    private $gross;
    /**
     * @XmlAttribute
     * @SerializedName("Abbonamento")
     * @var string
     */
    private $abonement;
    /**
     * @XmlAttribute
     * @SerializedName("CFAbbonamento")
     * @var string
     */
    private $abonementFiscalCode;
    /**
     * @XmlAttribute
     * @SerializedName("CodiceAbbonamento")
     * @var string
     */
    private $abonementCode;
    /**
     * @XmlAttribute
     * @SerializedName("QEventiAbilitati")
     * @var int
     */
    private $validatedEventsNumber;
    /**
     * @XmlAttribute
     * @SerializedName("ProgressivoAbbonamento")
     * @var int
     */
    private $incrementedAbonement;
    /**
     * @XmlAttribute
     * @SerializedName("Annullamento")
     * @var string either S (yes) or N (no)
     */
    private $isNulled;
    /**
     * @XmlAttribute
     * @SerializedName("DataANN")
     */
    private $nulledDate;
    /**
     * @XmlAttribute
     * @SerializedName("OraANN")
     */
    private $nulledHour;
    /**
     * @XmlAttribute
     * @SerializedName("CartaAttivazioneANN")
     */
    private $nulledActivationCard;
    /**
     * @XmlAttribute
     * @SerializedName("ProgressivoFiscaleANN")
     */
    private $nulledProgressiveFiscalCode;
    /**
     * @XmlAttribute
     * @SerializedName("SigilloFiscaleANN")
     */
    private $nulledSigilloFiscalCode;
    /**
     * @XmlAttribute
     * @SerializedName("CodSupporto")
     */
    private $supportCode;
    /**
     * @XmlAttribute
     * @SerializedName("IdSupporto")
     */
    private $supportId;
    /**
     * @XmlAttribute
     * @SerializedName("Stato")
     */
    private $state;
    /**
     * @XmlAttribute
     * @SerializedName("DataIngresso")
     */
    private $intakeTime;
    /**
     * @XmlAttribute
     * @SerializedName("OraIngresso")
     */
    private $intakeHour;
    /**
     * @XmlAttribute
     * @SerializedName("IdSupAlt")
     */
    private $supportIdAlt;
    /**
     * @XmlAttribute
     * @SerializedName("Posto")
     */
    private $place;

    /**
     * @return string
     */
    public function getIssueSystem()
    {
        return $this->issueSystem;
    }

    /**
     * @param string $issueSystem
     */
    public function setIssueSystem($issueSystem)
    {
        $this->issueSystem = $issueSystem;
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
     * @return int
     */
    public function getAutoIncrementedFiscalNumber()
    {
        return $this->autoIncrementedFiscalNumber;
    }

    /**
     * @param int $autoIncrementedFiscalNumber
     */
    public function setAutoIncrementedFiscalNumber($autoIncrementedFiscalNumber)
    {
        $this->autoIncrementedFiscalNumber = $autoIncrementedFiscalNumber;
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
     * @return int
     */
    public function getIssuedDate()
    {
        return $this->issuedDate;
    }

    /**
     * @param int $issuedDate
     */
    public function setIssuedDate($issuedDate)
    {
        $this->issuedDate = $issuedDate;
    }

    /**
     * @return int
     */
    public function getIssuedTime()
    {
        return $this->issuedTime;
    }

    /**
     * @param int $issuedTime
     */
    public function setIssuedTime($issuedTime)
    {
        $this->issuedTime = $issuedTime;
    }

    /**
     * @return int
     */
    public function getLtaDate()
    {
        return $this->ltaDate;
    }

    /**
     * @param int $ltaDate
     */
    public function setLtaDate($ltaDate)
    {
        $this->ltaDate = $ltaDate;
    }

    /**
     * @return int
     */
    public function getLtaTime()
    {
        return $this->ltaTime;
    }

    /**
     * @param int $ltaTime
     */
    public function setLtaTime($ltaTime)
    {
        $this->ltaTime = $ltaTime;
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
    public function getGross()
    {
        return $this->gross;
    }

    /**
     * @param string $gross
     */
    public function setGross($gross)
    {
        $this->gross = $gross;
    }

    /**
     * @return string
     */
    public function getAbonement()
    {
        return $this->abonement;
    }

    /**
     * @param string $abonement
     */
    public function setAbonement($abonement)
    {
        $this->abonement = $abonement;
    }

    /**
     * @return string
     */
    public function getAbonementFiscalCode()
    {
        return $this->abonementFiscalCode;
    }

    /**
     * @param string $abonementFiscalCode
     */
    public function setAbonementFiscalCode($abonementFiscalCode)
    {
        $this->abonementFiscalCode = $abonementFiscalCode;
    }

    /**
     * @return string
     */
    public function getAbonementCode()
    {
        return $this->abonementCode;
    }

    /**
     * @param string $abonementCode
     */
    public function setAbonementCode($abonementCode)
    {
        $this->abonementCode = $abonementCode;
    }

    /**
     * @return int
     */
    public function getValidatedEventsNumber()
    {
        return $this->validatedEventsNumber;
    }

    /**
     * @param int $validatedEventsNumber
     */
    public function setValidatedEventsNumber($validatedEventsNumber)
    {
        $this->validatedEventsNumber = $validatedEventsNumber;
    }

    /**
     * @return int
     */
    public function getIncrementedAbonement()
    {
        return $this->incrementedAbonement;
    }

    /**
     * @param int $incrementedAbonement
     */
    public function setIncrementedAbonement($incrementedAbonement)
    {
        $this->incrementedAbonement = $incrementedAbonement;
    }

    /**
     * @return string
     */
    public function getIsNulled()
    {
        return $this->isNulled;
    }

    /**
     * @param string $isNulled
     */
    public function setIsNulled($isNulled)
    {
        $this->isNulled = $isNulled;
    }

    /**
     * @return mixed
     */
    public function getNulledDate()
    {
        return $this->nulledDate;
    }

    /**
     * The format is YYYYMMDD.
     * @param mixed $nulledDate
     */
    public function setNulledDate($nulledDate)
    {
        $this->nulledDate = $nulledDate;
    }

    /**
     * @return mixed
     */
    public function getNulledHour()
    {
        return $this->nulledHour;
    }

    /**
     * The format is HHMM.
     * @param mixed $nulledHour
     */
    public function setNulledHour($nulledHour)
    {
        $this->nulledHour = $nulledHour;
    }

    /**
     * @return mixed
     */
    public function getNulledActivationCard()
    {
        return $this->nulledActivationCard;
    }

    /**
     * @param mixed $nulledActivationCard
     */
    public function setNulledActivationCard($nulledActivationCard)
    {
        $this->nulledActivationCard = $nulledActivationCard;
    }

    /**
     * @return mixed
     */
    public function getNulledProgressiveFiscalCode()
    {
        return $this->nulledProgressiveFiscalCode;
    }

    /**
     * Nulled progressive number of the title or abonement.
     * It is provided by the "Activation card".
     * @param mixed $nulledProgressiveFiscalCode
     */
    public function setNulledProgressiveFiscalCode($nulledProgressiveFiscalCode)
    {
        $this->nulledProgressiveFiscalCode = $nulledProgressiveFiscalCode;
    }

    /**
     * @return mixed
     */
    public function getNulledSigilloFiscalCode()
    {
        return $this->nulledSigilloFiscalCode;
    }

    /**
     * @param mixed $nulledSigilloFiscalCode
     */
    public function setNulledSigilloFiscalCode($nulledSigilloFiscalCode)
    {
        $this->nulledSigilloFiscalCode = $nulledSigilloFiscalCode;
    }

    /**
     * @return mixed
     */
    public function getSupportCode()
    {
        return $this->supportCode;
    }

    /**
     * Based on the TAB A from Provvedimento agenzia delle entrate 04.03.2008.
     * Allowed Values are:
     * BT - Biglietto Tradizionale
     * CE - Cellulare
     * CC - Carta di Credito
     * CI - Carta d’Identità
     * DD - Documento digitale
     * FI - Carta fidelizzazione
     * TC - Tessera Servizi Comunale
     * TF - Tessera del tifoso
     * TS - Tessera sanitaria
     * @param string $supportCode
     */
    public function setSupportCode($supportCode)
    {
        $this->supportCode = $supportCode;
    }

    /**
     * @return mixed
     */
    public function getSupportId()
    {
        return $this->supportId;
    }

    /**
     * @param mixed $supportId
     */
    public function setSupportId($supportId)
    {
        $this->supportId = $supportId;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getIntakeTime()
    {
        return $this->intakeTime;
    }

    /**
     * The format is HHMMSS.
     * @param mixed $intakeTime
     */
    public function setIntakeTime($intakeTime)
    {
        $this->intakeTime = $intakeTime;
    }

    /**
     * @return mixed
     */
    public function getIntakeHour()
    {
        return $this->intakeHour;
    }

    /**
     * @param mixed $intakeHour
     */
    public function setIntakeHour($intakeHour)
    {
        $this->intakeHour = $intakeHour;
    }

    /**
     * @return mixed
     */
    public function getSupportIdAlt()
    {
        return $this->supportIdAlt;
    }

    /**
     * @param mixed $supportIdAlt
     */
    public function setSupportIdAlt($supportIdAlt)
    {
        $this->supportIdAlt = $supportIdAlt;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

}