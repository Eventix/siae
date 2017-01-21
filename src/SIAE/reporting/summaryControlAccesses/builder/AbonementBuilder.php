<?php

namespace SIAE\reporting\summaryControlAccesses\builder;

use SIAE\common\builder\IBuilder;
use SIAE\reporting\summaryControlAccesses\model\Abonements;
use SIAE\reporting\summaryControlAccesses\model\TotalTypeAbonement;

class AbonementBuilder implements IBuilder
{
    /**
     * @var Abonements
     */
    private $abonement;

    public function __construct()
    {
        $this->abonement = new Abonements();
    }


    /**
     * Place code provided by SIAE.
     * @param $placeCode
     * @return $this
     */
    public function placeCode($placeCode)
    {
        $this->abonement->setPlaceCode($placeCode);
        return $this;
    }


    /**
     * Available capacity.
     * @param $capacity
     * @return $this
     */
    public function capacity($capacity)
    {
        $this->abonement->setCapacity($capacity);
        return $this;
    }


    /**
     * @param TotalTypeAbonement $totalAbonementTypes
     * @return $this
     */
    public function totalAbonementTypes($totalAbonementTypes)
    {
        $this->abonement->setTotalAbonementTypes($totalAbonementTypes);
        return $this;
    }

    /**
     * @return Abonements returns the newly built object
     */
    public function build()
    {
        return $this->abonement;
    }
}