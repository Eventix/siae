<?php

namespace SIAE\common\model;


use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("AbbonamentiEmessi") */
class ReleasedSubscriptions
{
    /** @SerializedName("TipoTitolo") */
    private $type;
    /** @SerializedName("Quantita") */
    private $quantity;
    /** @SerializedName("CorrispettivoLordo") */
    private $gross;
    /** @SerializedName("Prevendita") */
    private $preSale;
    /** @SerializedName("IVACorrispettivo") */
    private $VATequivalent;
    /** @SerializedName("IVAPrevendita") */
    private $VATpreSale;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getGross()
    {
        return $this->gross;
    }

    /**
     * @param mixed $gross
     */
    public function setGross($gross)
    {
        $this->gross = $gross;
    }

    /**
     * @return mixed
     */
    public function getPreSale()
    {
        return $this->preSale;
    }

    /**
     * @param mixed $preSale
     */
    public function setPreSale($preSale)
    {
        $this->preSale = $preSale;
    }

    /**
     * @return mixed
     */
    public function getVATequivalent()
    {
        return $this->VATequivalent;
    }

    /**
     * @param mixed $VATequivalent
     */
    public function setVATequivalent($VATequivalent)
    {
        $this->VATequivalent = $VATequivalent;
    }

    /**
     * @return mixed
     */
    public function getVATpreSale()
    {
        return $this->VATpreSale;
    }

    /**
     * @param mixed $VATpreSale
     */
    public function setVATpreSale($VATpreSale)
    {
        $this->VATpreSale = $VATpreSale;
    }
}