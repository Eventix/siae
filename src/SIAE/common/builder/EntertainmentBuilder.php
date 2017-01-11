<?php

namespace SIAE\common\builder;

use SIAE\common\model\Entertainment;
use SIAE\common\model\TaxationType;


class EntertainmentBuilder implements IBuilder
{
    /**
     * @var Entertainment
     */
    private $entertainment;


    public function __construct()
    {
        $this->entertainment = new Entertainment();
    }

    /**
     * Accepted values are I (entertainment) or S (of only show).
     * The taxation depends on it.
     * @param String $taxationType
     * @return EntertainmentBuilder
     */
    public function taxationType($taxationType)
    {
        $this->entertainment->setTaxationType(new TaxationType($taxationType));
        return $this;
    }

    /**
     * Percentage stating the relationship
     * between entertainment and show.
     * @param Integer $incidence
     * @return EntertainmentBuilder
     */
    public function incidence($incidence)
    {

        $this->entertainment->setIncidence($incidence);
        return $this;
    }


    /**
     * @return Entertainment returns the newly built object
     */
    public function build()
    {
        return $this->entertainment;
    }
}