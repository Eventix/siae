<?php

namespace SIAE\reporting\summaryControlAccesses\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("Abbonamenti") */
class Abonements
{
    /**
     * @SerializedName("CodiceOrdinePosto")
     * @var string
     */
    private $placeCode;
    /**
     * @SerializedName("Capienza")
     * @var int
     */
    private $capacity;
    /**
     * @SerializedName("TotaleTipoTitoloAbbonamento")
     * @var TotalTypeAbonement
     */
    private $totalAbonementTypes;

    /**
     * @return string
     */
    public function getPlaceCode()
    {
        return $this->placeCode;
    }

    /**
     * @param string $placeCode
     */
    public function setPlaceCode($placeCode)
    {
        $this->placeCode = $placeCode;
    }

    /**
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @return TotalTypeAbonement
     */
    public function getTotalAbonementTypes()
    {
        return $this->totalAbonementTypes;
    }

    /**
     * @param TotalTypeAbonement $totalAbonementTypes
     */
    public function setTotalAbonementTypes($totalAbonementTypes)
    {
        $this->totalAbonementTypes = $totalAbonementTypes;
    }


}