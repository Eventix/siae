<?php

namespace SIAE\common\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;

/** @XmlRoot("Organizzatore") */
class Organizer
{
    /** @SerializedName("Denominazione") */
    private $denomination;
    /** @SerializedName("CodiceFiscale") */
    private $fiscalCode;
    /** @SerializedName("TipoOrganizzatore") */
    private $organizerType;
    /**
     * @XmlList(inline = true, entry="Evento")
     */
    private $events;
    /**
     * @XmlList(inline = true, entry="Abbonamenti")
     */
    private $abonements;

    /**
     * @return mixed
     */
    public function getDenomination()
    {
        return $this->denomination;
    }

    /**
     * @param mixed $denomination
     */
    public function setDenomination($denomination)
    {
        $this->denomination = $denomination;
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
     * @return Organizer
     */
    public function getOrganizerType()
    {
        return $this->organizerType;
    }

    /**
     * Only for the cinema.
     * Allowed values: E (essay), P (related to church), G (generic).
     * @param String $organizerType
     */
    public function setOrganizerType($organizerType)
    {
        $this->organizerType = $organizerType;
    }

    /**
     * @return mixed
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param mixed $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    /**
     * @return mixed
     */
    public function getAbonements()
    {
        return $this->abonements;
    }

    /**
     * Abonements are a set of information on
     *
     *
     * @param mixed $abonements
     */
    public function setAbonements($abonements)
    {
        $this->abonements = $abonements;
    }
}