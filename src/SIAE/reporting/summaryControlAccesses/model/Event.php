<?php

namespace SIAE\reporting\summaryControlAccesses\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("Evento") */
class Event
{
    /**
     * @SerializedName("CFOrganizzatore")
     * @var string
     */
    private $fiscalCodeOrganizer;

    /**
     * @SerializedName("DenominazioneOrganizzatore")
     * @var string
     */
    private $denominationOrganizer;

    /**
     * @SerializedName("TipologiaOrganizzatore")
     * @var string
     */
    private $typeOrganizer;

    /**
     * @SerializedName("SpettacoloIntrattenimento")
     * @var string
     */
    private $entertainmentShow;

    /**
     * @SerializedName("IncidenzaIntrattenimento")
     * @var string
     */
    private $entertainmentEffect;

    /**
     * @SerializedName("DenominazioneLocale")
     * @var string
     */
    private $localDenomination;
    /**
     * @SerializedName("CodiceLocale")
     * @var string
     */
    private $localCode;
    /**
     * @SerializedName("DataEvento")
     * @var string
     */
    private $date;
    /**
     * @SerializedName("OraEvento")
     * @var string
     */
    private $time;
    /**
     * @SerializedName("TipoGenere")
     * @var string
     */
    private $genreType;
    /**
     * @SerializedName("TitoloEvento")
     * @var string
     */
    private $title;
    /**
     * @SerializedName("Autore")
     * @var string
     */
    private $author;
    /**
     * @SerializedName("Esecutore")
     * @var string
     */
    private $performer;
    /**
     * @SerializedName("NazionalitaFilm")
     * @var string
     */
    private $movieNationality;
    /**
     * @SerializedName("NumOpereRappresentate")
     * @var string
     */
    private $amountOfRepresentedWorks;
    /**
     * @SerializedName("SistemaEmissione")
     * @var []IssueSystem
     */
    private $issueSystem;

    /**
     * @return string
     */
    public function getFiscalCodeOrganizer()
    {
        return $this->fiscalCodeOrganizer;
    }

    /**
     * @param string $fiscalCodeOrganizer
     */
    public function setFiscalCodeOrganizer($fiscalCodeOrganizer)
    {
        $this->fiscalCodeOrganizer = $fiscalCodeOrganizer;
    }

    /**
     * @return string
     */
    public function getDenominationOrganizer()
    {
        return $this->denominationOrganizer;
    }

    /**
     * @param string $denominationOrganizer
     */
    public function setDenominationOrganizer($denominationOrganizer)
    {
        $this->denominationOrganizer = $denominationOrganizer;
    }

    /**
     * @return string
     */
    public function getTypeOrganizer()
    {
        return $this->typeOrganizer;
    }

    /**
     * @param string $typeOrganizer
     */
    public function setTypeOrganizer($typeOrganizer)
    {
        $this->typeOrganizer = $typeOrganizer;
    }

    /**
     * @return string
     */
    public function getEntertainmentShow()
    {
        return $this->entertainmentShow;
    }

    /**
     * Accepted values:
     * S - Spettacolo solo tit. tradizionali (A show with only traditional titles)
     * I - Intrattenimento solo tit. tradizionali (Entertainment with only trad. titles)
     * P - Spettacolo con tit. digitali (A show with digital titles)
     * N - Intrattenimento con tit. digitali (Entertainment with digital titles)
     *
     * @param string $entertainmentShow
     */
    public function setEntertainmentShow($entertainmentShow)
    {
        $this->entertainmentShow = $entertainmentShow;
    }

    /**
     * @return string
     */
    public function getEntertainmentEffect()
    {
        return $this->entertainmentEffect;
    }

    /**
     * @param string $entertainmentEffect
     */
    public function setEntertainmentEffect($entertainmentEffect)
    {
        $this->entertainmentEffect = $entertainmentEffect;
    }

    /**
     * @return string
     */
    public function getLocalDenomination()
    {
        return $this->localDenomination;
    }

    /**
     * @param string $localDenomination
     */
    public function setLocalDenomination($localDenomination)
    {
        $this->localDenomination = $localDenomination;
    }

    /**
     * @return string
     */
    public function getLocalCode()
    {
        return $this->localCode;
    }

    /**
     * @param string $localCode
     */
    public function setLocalCode($localCode)
    {
        $this->localCode = $localCode;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param string $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getGenreType()
    {
        return $this->genreType;
    }

    /**
     * Included in Tab. 1 provv. AE 23/7/2001
     * EG: Cinema, teatro, sport, mostra, concerto
     * @param string $genreType
     */
    public function setGenreType($genreType)
    {
        $this->genreType = $genreType;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * @param string $performer
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
    }

    /**
     * @return string
     */
    public function getMovieNationality()
    {
        return $this->movieNationality;
    }

    /**
     * @param string $movieNationality
     */
    public function setMovieNationality($movieNationality)
    {
        $this->movieNationality = $movieNationality;
    }

    /**
     * @return string
     */
    public function getAmountOfRepresentedWorks()
    {
        return $this->amountOfRepresentedWorks;
    }

    /**
     * @param string $amountOfRepresentedWorks
     */
    public function setAmountOfRepresentedWorks($amountOfRepresentedWorks)
    {
        $this->amountOfRepresentedWorks = $amountOfRepresentedWorks;
    }

    /**
     * @return mixed
     */
    public function getIssueSystem()
    {
        return $this->issueSystem;
    }

    /**
     * @param mixed $issueSystem
     */
    public function setIssueSystem($issueSystem)
    {
        $this->issueSystem = $issueSystem;
    }


}