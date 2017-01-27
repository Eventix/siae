<?php

namespace SIAE\reporting\transactionLog\builder;


use SIAE\common\builder\IBuilder;
use SIAE\reporting\transactionLog\model\Complementary;

class ComplementaryBuilder implements IBuilder
{
    /**
     * @var Complementary
     */
    private $complementary;


    public function __construct()
    {
        $this->complementary = new Complementary();
    }

    /**
     * Total amount related to each "service" provided and specifically
     * to the "performance codes".
     * @param $performanceAmount
     * @return $this
     */
    public function performanceAmount($performanceAmount)
    {
        $this->complementary->setPerformanceAmount($performanceAmount);
        return $this;
    }

    /**
     * Performance code found in TAB 4
     * page 22, AppMisuratoriFiscali.pdf
     * @param $performanceCode
     * @return $this
     */
    public function performanceCode($performanceCode)
    {
        $this->complementary->setPerformanceAmount($performanceCode);
        return $this;
    }

    /**
     * @return Complementary returns the newly built object
     */
    public function build()
    {
        return $this->complementary;
    }
}