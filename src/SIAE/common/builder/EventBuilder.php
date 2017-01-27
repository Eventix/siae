<?php

namespace SIAE\common\builder;


use SIAE\common\model\Entertainment;
use SIAE\common\model\Event;
use SIAE\common\model\MultipleGenre;
use SIAE\common\model\Place;
use SIAE\common\model\PlaceOrder;

class EventBuilder implements IBuilder
{
    /**
     * @var Event
     */
    private $event;

    public function __construct()
    {
        $this->event = new Event();
    }

    /**
     * @param Entertainment $entertainment
     * @return EventBuilder
     */
    public function entertainment($entertainment)
    {
        $this->event->setEntertainment($entertainment);
        return $this;
    }

    /**
     * @param Place $place
     * @return EventBuilder
     */
    public function place($place)
    {
        $this->event->setPlace($place);
        return $this;
    }

    /**
     * Format is YYYYMMDD.
     * @param mixed $eventDate
     * @return EventBuilder
     */
    public function eventDate($eventDate)
    {
        $this->event->setEventDate($eventDate);
        return $this;
    }

    /**
     * Format is HHMM.
     * @param mixed $eventTime
     * @return EventBuilder
     */
    public function eventTime($eventTime)
    {
        $this->event->setEventTime($eventTime);
        return $this;
    }

    /**
     * @param MultipleGenre $multipleGenre
     * @return EventBuilder
     */
    public function multipleGenre($multipleGenre)
    {
        $this->event->setMultipleGenre($multipleGenre);
        return $this;
    }

    /**
     * @param PlaceOrder[] $placeOrders
     * @return EventBuilder
     */
    public function placeOrders($placeOrders)
    {
        $this->event->setPlaceOrders($placeOrders);
        return $this;
    }

    /**
     * @return Event
     */
    public function build()
    {
        return $this->event;
    }
}