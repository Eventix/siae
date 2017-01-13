<?php

namespace SIAE\common\builder;


use SIAE\common\model\Event;
use SIAE\common\model\Organizer;
use SIAE\common\model\OrganizerType;
use SIAE\common\model\Abonements;

class OrganizerBuilder implements IBuilder
{
    /**
     * @var Organizer
     */
    private $organizer;


    public function __construct()
    {
        $this->organizer = new Organizer();
    }

    /**
     * @param mixed $denomination
     * @return OrganizerBuilder
     */
    public function denomination($denomination)
    {
        $this->organizer->setDenomination($denomination);
        return $this;
    }

    /**
     * @param mixed $fiscalCode
     * @return OrganizerBuilder
     */
    public function fiscalCode($fiscalCode)
    {
        $this->organizer->setFiscalCode($fiscalCode);
        return $this;
    }

    /**
     * Only for the cinema.
     * Organizer type must be E , P or G.
     * Allowed values: E (essay), P (related to church), G (generic).
     * @param String $organizerType
     * @return OrganizerBuilder
     */
    public function organizerType($organizerType)
    {
        $this->organizer->setOrganizerType(new OrganizerType($organizerType));
        return $this;
    }

    /**
     * @param Event[] $events
     * @return OrganizerBuilder
     */
    public function events($events)
    {
        $this->organizer->setEvents($events);
        return $this;
    }

    /**
     * // TODO: fix the comment
     * @param Abonements[] $abonements
     * @return OrganizerBuilder
     */
    public function abonements($abonements)
    {
        $this->organizer->setAbonements($abonements);
        return $this;
    }

    /**
     * @return Organizer
     */
    public function build()
    {
        return $this->organizer;
    }
}