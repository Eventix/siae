<?php

namespace SIAE\reporting\summaryControlAccesses;


use SIAE\common\builder\IBuilder;


/**
 * Builder for the RCA SIAE XML mapping.
 */
class SummaryControlAccessesBuilder implements IBuilder
{
    /**
     * @var SummaryControlAccesses
     */
    public $summaryControlAccesses;


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
     * @return SummaryControlAccesses returns the newly built SummaryControlAccesses
     */
    public function build()
    {
        return $this->summaryControlAccesses;
    }
}