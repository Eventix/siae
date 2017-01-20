<?php

namespace SIAE\reporting\summaryControlAccesses;


use SIAE\common\builder\IBuilder;


/**
 *
 * Builder for the RCA SIAE XML mapping.
 * Summary of the accesses that happened at the event.
 */
class SummaryControlAccessesBuilder implements IBuilder
{
    /**
     * @var SummaryControlAccesses
     */
    public $summaryControlAccesses;


    public function __construct()
    {
        $this->summaryControlAccesses = new SummaryControlAccesses();
    }

    /**
     * @param $owner
     * @return $this
     */
    public function companyHolder($owner)
    {
        $this->summaryControlAccesses->setCompanyHolder($owner);
        return $this;
    }


    /**
     * @param $event
     * @return $this
     */
    public function event($event)
    {
        $this->summaryControlAccesses->setEvents($event);
        return $this;
    }


    /**
     * Specifies whether this RCA is the replacement of another one.
     * @param $replacementValue
     * @return $this
     */
    public function replacement($replacementValue)
    {
        $this->summaryControlAccesses->setReplacement($replacementValue);
        return $this;
    }

    /**
     * @return SummaryControlAccesses returns the newly built SummaryControlAccesses
     */
    public function build()
    {
        return $this->summaryControlAccesses;
    }
}