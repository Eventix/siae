<?php

namespace SIAE\common\builder;

use SIAE\common\model\AccessTitle;


class AccessTitleBuilder implements IBuilder
{

    private $accessTitle;

    public function __construct()
    {
        $this->accessTitle = new AccessTitle();
    }

    /**
     * @param mixed $type
     * @return AccessTitleBuilder
     */
    public function type($type)
    {
        $this->accessTitle->setType($type);
        return $this;
    }

    /**
     * @param mixed $quantity
     * @return AccessTitleBuilder
     */
    public function quantity($type)
    {
        $this->accessTitle->setQuantity($type);
        return $this;
    }

    /**
     * @param mixed $gross
     * @return AccessTitleBuilder
     */
    public function gross($gross)
    {
        $this->accessTitle->setGross($gross);
        return $this;
    }

    /**
     * @param mixed $preSale
     * @return AccessTitleBuilder
     */
    public function preSale($preSale)
    {
        $this->accessTitle->setPreSale($preSale);
        return $this;
    }

    /**
     * @param mixed $VATequivalent
     * @return AccessTitleBuilder
     */
    public function VATequivalent($VATequivalent)
    {
        $this->accessTitle->setVATequivalent($VATequivalent);
        return $this;
    }

    /**
     * @param mixed $VATpreSale
     * @return AccessTitleBuilder
     */
    public function VATpreSale($VATpreSale)
    {
        $this->accessTitle->setVATpreSale($VATpreSale);
        return $this;
    }

    /**
     * @param mixed $performance
     * @return AccessTitleBuilder
     */
    public function performanceAmount($performance)
    {
        $this->accessTitle->setPerformanceAmount($performance);
        return $this;
    }

    public function build()
    {
        return $this->accessTitle;
    }
}