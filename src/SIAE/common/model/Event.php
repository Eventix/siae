<?php

namespace SIAE\common\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;

/** @XmlRoot("Evento") */
class Event
{
    /**
     * @var Entertainment
     */
    /** @SerializedName("Intrattenimento") */
    private $entertainment;
    /** @SerializedName("Locale") */
    private $place;
    /** @SerializedName("DataEvento") */
    private $eventDate;
    /** @SerializedName("OraEvento") */
    private $eventTime;
    /** @SerializedName("MultiGenere") */
    private $multipleGenre;
    /** @SerializedName("OrdineDiPosto")
     * @XmlList(inline = true, entry = "OrdineDiPosto")
     */
    private $placeOrders;

    /**
     * @return mixed
     */
    public function getEntertainment()
    {
        return $this->entertainment;
    }

    /**
     * @param mixed $entertainment
     */
    public function setEntertainment($entertainment)
    {
        $this->entertainment = $entertainment;
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
    public function getMultipleGenre()
    {
        return $this->multipleGenre;
    }

    /**
     * @param mixed $multipleGenre
     */
    public function setMultipleGenre($multipleGenre)
    {
        $this->multipleGenre = $multipleGenre;
    }

    /**
     * @return mixed
     */
    public function getPlaceOrders()
    {
        return $this->placeOrders;
    }

    /**
     * @param mixed $placeOrders
     */
    public function setPlaceOrders($placeOrders)
    {
        $this->placeOrders = $placeOrders;
    }


}