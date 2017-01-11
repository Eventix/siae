<?php

namespace SIAE\reporting\transactionLog\builder;

use SIAE\common\builder\IBuilder;
use SIAE\reporting\transactionLog\model\Abonement;

class AbonementBuilder implements IBuilder
{
    /**
     * @var Abonement
     */
    private $abonement;


    public function __construct()
    {
        $this->abonement = new Abonement();
    }


    /**
     * @param $quantityEnabledEvents
     * @return $this
     */
    public function quantityEnabledEvents($quantityEnabledEvents)
    {
        $this->abonement->setQuantityEnabledEvents($quantityEnabledEvents);
        return $this;
    }


    /**
     * @param $validity
     * @return $this
     */
    public function validity($validity)
    {
        $this->abonement->setValidity($validity);
        return $this;
    }


    /**
     * @param $accrual
     * @return $this
     */
    public function accrual($accrual)
    {
        $this->abonement->setAccrual($accrual);
        return $this;
    }


    /**
     * @param $entertainmentAccrual
     * @return $this
     */
    public function entertainmentAccrual($entertainmentAccrual)
    {
        $this->abonement->setEntertainmentAccrual($entertainmentAccrual);
        return $this;
    }


    /**
     * @param $VATAccrual
     * @return $this
     */
    public function vatAccrual($VATAccrual)
    {
        $this->abonement->setVATAccrual($VATAccrual);
        return $this;
    }


    /**
     * @param $gross
     * @return $this
     */
    public function gross($gross)
    {
        $this->abonement->setGross($gross);
        return $this;
    }

    /**
     * @param $preSale
     * @return $this
     */
    public function preSale($preSale)
    {
        $this->abonement->setPreSale($preSale);
        return $this;
    }


    /**
     * @param $VAT
     * @return $this
     */
    public function VAT($VAT)
    {
        $this->abonement->setVAT($VAT);
        return $this;
    }


    /**
     * @param $preSaleVAT
     * @return $this
     */
    public function preSaleVAT($preSaleVAT)
    {
        $this->abonement->setPreSaleVAT($preSaleVAT);
        return $this;
    }


    /**
     * @param $localCode
     * @return $this
     */
    public function localCode($localCode)
    {
        $this->abonement->setLocalCode($localCode);
        return $this;
    }


    /**
     * @param $eventDate
     * @return $this
     */
    public function eventDate($eventDate)
    {
        $this->abonement->setEventDate($eventDate);
        return $this;
    }


    /**
     * @param $eventTime
     * @return $this
     */
    public function eventTime($eventTime)
    {
        $this->abonement->setEventTime($eventTime);
        return $this;
    }


    /**
     *
     * @param $genreType
     * @return $this
     */
    public function genreType($genreType)
    {
        $this->abonement->setGenreType($genreType);
        return $this;
    }


    /**
     * @param $title
     * @return $this
     */
    public function title($title)
    {
        $this->abonement->setTitle($title);
        return $this;
    }


    /**
     * @param $abonementCode
     * @return $this
     */
    public function abonementCode($abonementCode)
    {
        $this->abonement->setAbonementCode($abonementCode);
        return $this;
    }


    /**
     * @param $incrementedAbonementCounter
     * @return $this
     */
    public function incrementedAbonementCounter($incrementedAbonementCounter)
    {
        $this->abonement->setIncrementedAbonementCounter($incrementedAbonementCounter);
        return $this;
    }


    /**
     * @param $fiscalCode
     * @return $this
     */
    public function fiscalCode($fiscalCode)
    {
        $this->abonement->setFiscalCode($fiscalCode);
        return $this;
    }


    /**
     * @param $notionalAmount
     * @return $this
     */
    public function notionalAmount($notionalAmount)
    {
        $this->abonement->setNotionalAmount($notionalAmount);
        return $this;
    }


    /**
     * @param $notionalVAT
     * @return $this
     */
    public function notionalVAT($notionalVAT)
    {
        $this->abonement->setNotionalVAT($notionalVAT);
        return $this;
    }


    /**
     * @param $turn
     * @return $this
     */
    public function turn($turn)
    {
        $this->abonement->setTurn($turn);
        return $this;
    }


    /**
     * @return Abonement returns the newly built object
     */
    public function build()
    {
        return $this->abonement;
    }
}