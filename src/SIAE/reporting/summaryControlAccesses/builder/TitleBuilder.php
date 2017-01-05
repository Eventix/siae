<?php

namespace SIAE\reporting\summaryControlAccesses\model;

use SIAE\common\builder\IBuilder;

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
     * @param $codePlaceOrder
     * @return $this
     */
    public function codePlaceOrder($codePlaceOrder)
    {
        $this->title->setCodePlaceOrder($codePlaceOrder);
        return $this;
    }


    /**
     * @param $capacity
     * @return $this
     */
    public function capacity($capacity)
    {
        $this->title->setCapacity($capacity);
        return $this;
    }

    /**
     * @param $totalTitleType
     * @return $this
     */
    public function setTotalTitleType($totalTitleType)
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