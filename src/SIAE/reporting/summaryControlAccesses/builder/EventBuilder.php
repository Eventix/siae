<?php

namespace SIAE\reporting\summaryControlAccesses\model;

use SIAE\common\builder\IBuilder;

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
     * @param $fiscalCodeOrganizer
     * @return $this
     */
    public function fiscalCodeOrganizer($fiscalCodeOrganizer)
    {
        $this->event->setFiscalCodeOrganizer($fiscalCodeOrganizer);
        return $this;
    }


    /**
     * Name or denomination of the organizer.
     * @param $denominationOrganizer
     * @return $this
     */
    public function denominationOrganizer($denominationOrganizer)
    {
        $this->event->setDenominationOrganizer($denominationOrganizer);
        return $this;
    }


    /**
     * @param $typeOrganizer
     * @return $this
     */
    public function typeOrganizer($typeOrganizer)
    {
        $this->event->setTypeOrganizer($typeOrganizer);
        return $this;
    }

    /**
     * Accepted values:
     * S - Spettacolo solo tit. tradizionali (A show with only traditional titles)
     * I - Intrattenimento solo tit. tradizionali (Entertainment with only trad. titles)
     * P - Spettacolo con tit. digitali (A show with digital titles)
     * N - Intrattenimento con tit. digitali (Entertainment with digital titles)
     *
     * @param $entertainmentShow
     * @return $this
     */
    public function entertainmentShow($entertainmentShow)
    {
        $this->event->setEntertainmentShow($entertainmentShow);
        return $this;
    }


    /**
     * @param $entertainmentEffect
     * @return $this
     */
    public function entertainmentEffect($entertainmentEffect)
    {
        $this->event->setEntertainmentEffect($entertainmentEffect);
        return $this;
    }


    /**
     * @param $localDenomination
     * @return $this
     */
    public function localDenomination($localDenomination)
    {
        $this->event->setLocalDenomination($localDenomination);
        return $this;
    }


    /**
     * Code of the place where the event happens.
     * It is provided by SIAE.
     * @param $localCode
     * @return $this
     */
    public function localCode($localCode)
    {
        $this->event->setLocalCode($localCode);
        return $this;
    }


    /**
     * @param $date
     * @return $this
     */
    public function date($date)
    {
        $this->event->setDate($date);
        return $this;
    }


    /**
     * @param $time
     * @return $this
     */
    public function time($time)
    {
        $this->event->setTime($time);
        return $this;
    }


    /**
     * @param $genreType
     * @return $this
     */
    public function genreType($genreType)
    {
        $this->event->setGenreType($genreType);
        return $this;
    }


    /**
     * @param $title
     * @return $this
     */
    public function title($title)
    {
        $this->event->setTitle($title);
        return $this;
    }


    /**
     * @param $author
     * @return $this
     */
    public function author($author)
    {
        $this->event->setAuthor($author);
        return $this;
    }

    /**
     * @param string $performer
     * @return $this
     */
    public function performer($performer)
    {
        $this->event->setPerformer($performer);
        return $this;
    }


    /**
     * @param $movieNationality
     * @return $this
     */
    public function movieNationality($movieNationality)
    {
        $this->event->setMovieNationality($movieNationality);
        return $this;
    }


    /**
     * @param $amountOfRepresentedWorks
     * @return $this
     */
    public function amountOfRepresentedWorks($amountOfRepresentedWorks)
    {
        $this->event->setAmountOfRepresentedWorks($amountOfRepresentedWorks);
        return $this;
    }


    /**
     * @param $issueSystem
     * @return $this
     */
    public function issueSystem($issueSystem)
    {
        $this->event->setIssueSystem($issueSystem);
        return $this;
    }


    /**
     * @return Event returns the newly built object
     */
    public function build()
    {
        return $this->event;
    }
}