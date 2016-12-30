<?php

namespace SIAE\reporting\dailyTransactionLogs\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;

/** @XmlRoot("LTA_Evento") */
class LTAEvent
{

    /**
     * @XmlAttribute
     * @SerializedName("OraApertura")
     */
    private $openingTime;

    /**
     * @XmlAttribute
     * @SerializedName("CFOrganizzatore")
     */
    private $CFOrganizer;

    /**
     * @XmlAttribute
     * @SerializedName("CodiceLocale")
     */
    private $localCode;

    /**
     * @XmlAttribute
     * @SerializedName("DataEvento")
     */
    private $eventDate;

    /**
     * @XmlAttribute
     * @SerializedName("OraEvento")
     */
    private $eventTime;

    /**
     * @XmlAttribute
     * @SerializedName("Titolo")
     */
    private $title;

    /**
     * @XmlAttribute
     * @SerializedName("TipoGenere")
     */
    private $genreType;

    /**
     * @XmlAttribute
     * @SerializedName("DataApertura")
     */
    private $openingDate;

    /**
     * @XmlList(inline = true, entry = "Supporto")
     */
    private $supports;

    /**
     * @XmlList(inline = true, entry = "TitoloAccesso")
     * @SerializedName("TitoloAccesso")
     */
    private $accessTitles;

    /**
     * @return mixed
     */
    public function getCFOrganizer()
    {
        return $this->CFOrganizer;
    }

    /**
     * @param mixed $CFOrganizer
     */
    public function setCFOrganizer($CFOrganizer)
    {
        $this->CFOrganizer = $CFOrganizer;
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
     * @param mixed $eventHour
     */
    public function setEventHour($eventHour)
    {
        $this->eventTime = $eventHour;
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
    public function getOpeningDate()
    {
        return $this->openingDate;
    }

    /**
     * @param mixed $openingDate
     */
    public function setOpeningDate($openingDate)
    {
        $this->openingDate = $openingDate;
    }


    /**
     * @return mixed
     */
    public function getOpeningTime()
    {
        return $this->openingTime;
    }

    /**
     * @param mixed $openingHour
     */
    public function setOpeningHour($openingHour)
    {
        $this->openingTime = $openingHour;
    }

    /**
     * @return mixed
     */
    public function getAccessTitles()
    {
        return $this->accessTitles;
    }

    /**
     * @param mixed $accessTitles
     */
    public function setAccessTitles($accessTitles)
    {
        $this->accessTitles = $accessTitles;
    }

    /**
     * @return mixed
     */
    public function getSupports()
    {
        return $this->supports;
    }

    /**
     * @param mixed $supports
     */
    public function setSupports($supports)
    {
        $this->supports = $supports;
    }


}