<?php

namespace SIAE\reporting\summaryControlAccesses\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("Titoli") */
class Title
{
    /**
     * @SerializedName("CodiceOrdinePosto")
     * @var string
     */
    private $codePlaceOrder;

    /**
     * @SerializedName("Capienza")
     * @var string
     */
    private $capacity;

    /**
     * @SerializedName("TotaleTipoTitolo")
     * @var []TotalTypeTitle
     */
    private $totalTitleType;

    /**
     * @return string
     */
    public function getCodePlaceOrder()
    {
        return $this->codePlaceOrder;
    }

    /**
     * @param string $codePlaceOrder
     */
    public function setCodePlaceOrder($codePlaceOrder)
    {
        $this->codePlaceOrder = $codePlaceOrder;
    }

    /**
     * @return string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param string $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @return mixed
     */
    public function getTotalTitleType()
    {
        return $this->totalTitleType;
    }

    /**
     * @param mixed $totalTitleType
     */
    public function setTotalTitleType($totalTitleType)
    {
        $this->totalTitleType = $totalTitleType;
    }


}