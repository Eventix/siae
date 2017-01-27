<?php

namespace SIAE\common\builder;


use SIAE\common\model\Place;

class PlaceBuilder implements IBuilder
{
    /**
     * @var Place
     */
    private $place;


    public function __construct()
    {
        $this->place = new Place();
    }

    /**
     * @param $name
     * @return $this PlaceBuilder
     */
    public function name($name)
    {
        $this->place->setName($name);
        return $this;
    }

    /**
     * @param $placeCode
     * @return $this PlaceBuilder
     */
    public function placeCode($placeCode)
    {
        $this->place->setPlaceCode($placeCode);
        return $this;
    }

    /**
     * @return Place
     */
    public function build()
    {
        return $this->place;
    }
}