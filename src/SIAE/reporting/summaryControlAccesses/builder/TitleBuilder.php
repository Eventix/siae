<?php

namespace SIAE\reporting\summaryControlAccesses\builder;

use SIAE\common\builder\IBuilder;
use SIAE\reporting\summaryControlAccesses\model\Title;

class TitleBuilder implements IBuilder
{
    /**
     * @var Title
     */
    private $title;


    public function __construct()
    {
        $this->title = new Title();
    }

    /**
     * Identifier of the area assigned for the event.
     * The allowed values should be extracted from Misuratori Fiscali doc
     * Table 2 page 20.
     * In case the area was not found in the table, a unique one should
     * be assigned instead.
     * (Unique meaning that no two areas with such code exists)
     * E.G.:
     * AA - Ring A
     * AB - Ring B
     * ...
     * @param $codePlaceOrder
     * @return $this
     */
    public function codePlaceOrder($codePlaceOrder)
    {
        $this->title->setCodePlaceOrder($codePlaceOrder);
        return $this;
    }


    /**
     * Expected places for the sitting area.
     * @param $capacity
     * @return $this
     */
    public function capacity($capacity)
    {
        $this->title->setCapacity($capacity);
        return $this;
    }

    /**
     * Group of information to be repeated for each title type.
     * @param $totalTitleType
     * @return $this
     */
    public function totalTitleType($totalTitleType)
    {
        $this->title->setTotalTitleType($totalTitleType);
        return $this;
    }


    /**
     * @return Title returns the newly built object
     */
    public function build()
    {
        return $this->title;
    }
}