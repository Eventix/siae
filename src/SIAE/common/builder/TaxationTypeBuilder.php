<?php

namespace SIAE\common\builder;


use SIAE\common\model\TaxationType;

class TaxationTypeBuilder implements IBuilder
{
    /**
     * @var TaxationType
     */
    private $taxationType;

    public function __construct()
    {
        $this->taxationType = new TaxationType();
    }

    /**
     * Can be S or I (show or entertainment).
     * @param $value String
     * @return $this
     */
    public function value($value)
    {
        $this->taxationType->setValue($value);
        return $this;
    }

    /**
     * @return TaxationType returns the newly built object
     */
    public function build()
    {
        return $this->taxationType;
    }
}