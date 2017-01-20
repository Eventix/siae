<?php

namespace SIAE\reporting\summaryControlAccesses;

use SIAE\reporting\summaryControlAccesses\model\CompanyHolder;
use SIAE\reporting\summaryControlAccesses\model\Event;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** @XmlRoot("RiepilogoControlloAccessi") */
class SummaryControlAccesses
{
    /**
     * @SerializedName("Titolare")
     * @var CompanyHolder
     */
    private $owner;
    /**
     * @SerializedName("Evento")
     * @var []Event
     */
    private $events;

    /**
     * Accept values are S or N.
     * @SerializedName("Sostituzione")
     * @XmlAttribute
     * @var string
     */
    private $replacement;

    /**
     * @return CompanyHolder
     */
    public function getCompanyHolder()
    {
        return $this->owner;
    }

    /**
     * @return Event
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param Event $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    /**
     * @param CompanyHolder $owner
     */
    public function setCompanyHolder($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return string
     */
    public function getReplacement()
    {
        return $this->replacement;
    }

    /**
     * @param string $replacement
     */
    public function setReplacement($replacement)
    {
        $this->replacement = $replacement;
    }
}