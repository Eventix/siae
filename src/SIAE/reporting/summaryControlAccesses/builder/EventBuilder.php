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
     * Fiscal code of the organizer.
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
     * Only for the cinema.
     * Accepted values are:
     * E - Essay
     * P - Parrocchiale (Church related)
     * G - Generico (generic)
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
     * Percentage representing the proportion
     * between entertainment and show.
     * @param $entertainmentEffect
     * @return $this
     */
    public function entertainmentEffect($entertainmentEffect)
    {
        $this->event->setEntertainmentEffect($entertainmentEffect);
        return $this;
    }


    /**
     * Name or denomination of the place hosting the event.
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
     * Event date.
     * Format is YYYYMMDD.
     * @param $date
     * @return $this
     */
    public function eventDate($date)
    {
        $this->event->setDate($date);
        return $this;
    }


    /**
     * Event time.
     * Format is HHMM.
     * @param $time
     * @return $this
     */
    public function eventTime($time)
    {
        $this->event->setTime($time);
        return $this;
    }


    /**
     * Genre of the event.
     * See TAB1 in AppMisuratoriFiscali.pdf
     * E.G:
     * cinema, teatro, calcio...
     * @param $genreType
     * @return $this
     */
    public function genreType($genreType)
    {
        $this->event->setGenreType($genreType);
        return $this;
    }


    /**
     * Title of the event.
     * @param $title
     * @return $this
     */
    public function title($title)
    {
        $this->event->setTitle($title);
        return $this;
    }


    /**
     * Author of the event.
     * @param $author
     * @return $this
     */
    public function author($author)
    {
        $this->event->setAuthor($author);
        return $this;
    }

    /**
     * Name of the band, theater group, orchestra...
     * @param string $performer
     * @return $this
     */
    public function performer($performer)
    {
        $this->event->setPerformer($performer);
        return $this;
    }


    /**
     * Movie nationality.
     * @param $movieNationality
     * @return $this
     */
    public function movieNationality($movieNationality)
    {
        $this->event->setMovieNationality($movieNationality);
        return $this;
    }


    /**
     * Only for cinema and theatre.
     * Number of works (masterpieces) presented.
     * @param $amountOfRepresentedWorks
     * @return $this
     */
    public function amountOfRepresentedWorks($amountOfRepresentedWorks)
    {
        $this->event->setAmountOfRepresentedWorks($amountOfRepresentedWorks);
        return $this;
    }


    /**
     * Code of the issuing system provided by SIAE.
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