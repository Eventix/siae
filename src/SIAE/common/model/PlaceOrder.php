<?php

namespace SIAE\common\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("OrdineDiPosto") */
class PlaceOrder
{
    /** @SerializedName("CodiceOrdine") */
    private $code;
    /** @SerializedName("Capienza") */
    private $capacity;
    /** @SerializedName("TitoliAccesso") */
    private $accessTitle;
    /** @SerializedName("BigliettiAbbonamento") */
    private $abonementsTicket;
    private $seasonTicket;

    /**
     * @SerializedName("IVAEccedenteOmaggi")
     */
    private $VATExceedingOffers;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param mixed $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @return mixed
     */
    public function getAccessTitle()
    {
        return $this->accessTitle;
    }

    /**
     * @param mixed $accessTitle
     */
    public function setAccessTitle($accessTitle)
    {
        $this->accessTitle = $accessTitle;
    }

    /**
     * @return mixed
     */
    public function getSeasonTicket()
    {
        return $this->seasonTicket;
    }

    /**
     * @param mixed $seasonTicket
     */
    public function setSeasonTicket($seasonTicket)
    {
        $this->seasonTicket = $seasonTicket;
    }

    /**
     * @return mixed
     */
    public function getAbonementsTicket()
    {
        return $this->abonementsTicket;
    }

    /**
     * @param mixed $abonementTicket
     */
    public function setAbonementTicket($abonementTicket)
    {
        $this->abonementsTicket = $abonementTicket;
    }

    /**
     * @return mixed
     */
    public function getVATExceedingOffers()
    {
        return $this->VATExceedingOffers;
    }

    /**
     * @param mixed $VATExceedingOffers
     */
    public function setVATExceedingOffers($VATExceedingOffers)
    {
        $this->VATExceedingOffers = $VATExceedingOffers;
    }
}