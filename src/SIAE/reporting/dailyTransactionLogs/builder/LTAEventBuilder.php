<?php

namespace SIAE\reporting\dailyTransactionLogs\builder;

use SIAE\common\builder\IBuilder;
use SIAE\reporting\dailyTransactionLogs\model\LTAEvent;


/** @XmlRoot("LTA_Evento") */
class LTAEventBuilder implements IBuilder
{
    /**
     * @var LTAEvent model
     */
    private $dailyTransaction;


    public function __construct()
    {
        $this->dailyTransaction = new LTAEvent();
    }


    /**
     * @param $CFOrganizer
     * @return $this
     */
    public function cfOrganizer($CFOrganizer)
    {
        $this->dailyTransaction->setCFOrganizer($CFOrganizer);
        return $this;
    }

    /**
     * @param $localCode
     * @return $this
     */
    public function localCode($localCode)
    {
        $this->dailyTransaction->setLocalCode($localCode);
        return $this;

    }

    /**
     * @param $eventDate
     * @return $this
     */
    public function eventDate($eventDate)
    {
        $this->dailyTransaction->setEventDate($eventDate);
        return $this;

    }


    /**
     * @param $eventHour
     * @return $this
     */
    public function eventHour($eventHour)
    {
        $this->dailyTransaction->setEventHour($eventHour);
        return $this;
    }


    /**
     * @param $title
     * @return $this
     */
    public function title($title)
    {
        $this->dailyTransaction->setTitle($title);
        return $this;
    }


    /**
     * @param $genreType
     * @return $this
     */
    public function genreType($genreType)
    {
        $this->dailyTransaction->setGenreType($genreType);
        return $this;
    }

    /**
     * @param $openingDate
     * @return $this
     */
    public function openingDate($openingDate)
    {
        $this->dailyTransaction->setOpeningDate($openingDate);
        return $this;

    }

    /**
     * @param $openingHour
     * @return $this
     */
    public function openingHour($openingHour)
    {
        $this->dailyTransaction->setOpeningHour($openingHour);
        return $this;

    }

    /**
     * @param []AccessTitles
     * @return $this
     */
    public function accessTitles($accessTitles)
    {
        $this->dailyTransaction->setAccessTitles($accessTitles);
        return $this;

    }

    /**
     * @param []Support
     * @return $this
     */
    public function supports($supports)
    {
        $this->dailyTransaction->setSupports($supports);
        return $this;

    }

    /**
     * @return LTAEvent
     */
    public function build()
    {
        return $this->dailyTransaction;
    }
}