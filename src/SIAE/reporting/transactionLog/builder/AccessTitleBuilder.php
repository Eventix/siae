<?php

namespace SIAE\reporting\transactionLog\builder;

use SIAE\reporting\transactionLog\model\AccessTitle;

class AccessTitleBuilder
{
    /**
     * @var AccessTitle
     */
    private $accessTitle;

    public function __construct()
    {
        $this->accessTitle = new AccessTitle();
    }


    /**
     * @param $isNulled
     * @return $this
     */
    public function isNulled($isNulled)
    {
        $this->accessTitle->setIsNulled($isNulled);
        return $this;
    }

    /**
     * @param $VATFigurative
     * @return $this
     */
    public function notationalVAT($VATFigurative)
    {
        $this->accessTitle->setNotationalVAT($VATFigurative);
        return $this;
    }

    /**
     * @param $localCode
     * @return $this
     */
    public function localCode($localCode)
    {
        $this->accessTitle->setLocalCode($localCode);
        return $this;
    }

    /**
     * @param $eventDate
     * @return $this
     */
    public function eventDate($eventDate)
    {
        $this->accessTitle->setEventDate($eventDate);
        return $this;
    }

    /**
     * @param $eventTime
     * @return $this
     */
    public function eventTime($eventTime)
    {
        $this->accessTitle->setEventTime($eventTime);
        return $this;
    }

    /**
     * @param $genreType
     * @return $this
     */
    public function genreType($genreType)
    {
        $this->accessTitle->setGenreType($genreType);
        return $this;
    }

    /**
     * @param $title
     * @return $this
     */
    public function title($title)
    {
        $this->accessTitle->setTitle($title);
        return $this;
    }

    /**
     * @param $complementary
     * @return $this
     */
    public function complementary($complementary)
    {
        $this->accessTitle->setComplementary($complementary);
        return $this;
    }

    /**
     * @param $type
     * @return $this
     */
    public function type($type)
    {
        $this->accessTitle->setType($type);
        return $this;
    }

    /**
     * @param $quantity
     * @return $this
     */
    public function quantity($quantity)
    {
        $this->accessTitle->setQuantity($quantity);
        return $this;
    }

    /**
     * @param $gross
     * @return $this
     */
    public function gross($gross)
    {
        $this->accessTitle->setGross($gross);
        return $this;
    }

    /**
     * @param $preSale
     * @return $this
     */
    public function preSale($preSale)
    {
        $this->accessTitle->setPreSale($preSale);
        return $this;
    }

    /**
     * @param $VATequivalent
     * @return $this
     */
    public function vatEquivalent($VATequivalent)
    {
        $this->accessTitle->setVATequivalent($VATequivalent);
        return $this;
    }

    /**
     * @param $VATpreSale
     * @return $this
     */
    public function vatPreSale($VATpreSale)
    {
        $this->accessTitle->setVATpreSale($VATpreSale);
        return $this;
    }

    /**
     * @param $performanceAmount
     * @return $this
     */
    public function performanceAmount($performanceAmount)
    {
        $this->accessTitle->setPerformanceAmount($performanceAmount);
        return $this;
    }

}