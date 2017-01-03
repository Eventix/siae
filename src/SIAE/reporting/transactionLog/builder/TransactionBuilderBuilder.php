<?php

namespace SIAE\reporting\transactionLog\builder;

use SIAE\common\builder\IBuilder;
use SIAE\reporting\dailyTransactionLogs\model\AccessTitle;
use SIAE\reporting\transactionLog\model\Transaction;

class TransactionBuilder implements IBuilder
{
    /**
     * @var Transaction
     */
    private $transaction;


    public function __construct()
    {
        $this->transaction = new Transaction();
    }


    /**
     * @param $CFOrganizer
     * @return $this
     */
    public function cfOrganizer($CFOrganizer)
    {
        $this->transaction->setCFOrganizer($CFOrganizer);
        return $this;
    }


    /**
     * @param $CFOwner
     */
    public function cfOwner($CFOwner)
    {
        $this->transaction->setCFOwner($CFOwner);
    }


    /**
     * @param $VATreleased
     */
    public function VATreleased($VATreleased)
    {
        $this->VATreleased = $VATreleased;
    }


    /**
     * @param $taxationType
     * @return $this
     */
    public function taxationType($taxationType)
    {
        $this->transaction->setTaxationType($taxationType);
        return $this;
    }

    /**
     * @param $currency
     * @return $this
     */
    public function currency($currency)
    {
        $this->transaction->setCurrency($currency);
        return $this;
    }

    /**
     * @param $issuingSystem
     * @return $this
     */
    public function issuingSystem($issuingSystem)
    {
        $this->transaction->setIssuingSystem($issuingSystem);
        return $this;
    }

    /**
     * @param $activationCard
     * @return $this
     */
    public function activationCard($activationCard)
    {
        $this->transaction->setActivationCard($activationCard);
        return $this;
    }

    /**
     * @param $fiscalSigilloCode
     * @return $this
     */
    public function fiscalSigilloCode($fiscalSigilloCode)
    {
        $this->transaction->setFiscalSigilloCode($fiscalSigilloCode);
        return $this;
    }

    /**
     * @param $issuedDate
     * @return $this
     */
    public function issuedDate($issuedDate)
    {
        $this->transaction->setIssuedDate($issuedDate);
        return $this;
    }

    /**
     * @param $issuedTime
     * @return $this
     */
    public function issuedTime($issuedTime)
    {
        $this->transaction->setIssuedTime($issuedTime);
        return $this;
    }

    /**
     * @param $incrementedCounter
     * @return $this
     */
    public function incrementedCounter($incrementedCounter)
    {
        $this->transaction->setIncrementedCounter($incrementedCounter);
        return $this;
    }

    /**
     * @param $titleType
     * @return $this
     */
    public function titleType($titleType)
    {
        $this->transaction->setTitleType($titleType);
        return $this;
    }

    /**
     * @param $orderCode
     * @return $this
     */
    public function orderCode($orderCode)
    {
        $this->transaction->setOrderCode($orderCode);
        return $this;
    }

    /**
     * @param $causal
     * @return $this
     */
    public function causal($causal)
    {
        $this->transaction->setCausal($causal);
        return $this;
    }

    /**
     * @param $place
     * @return $this
     */
    public function place($place)
    {
        $this->transaction->setPlace($place);
        return $this;
    }

    /**
     * @param $sellingPlace
     * @return $this
     */
    public function sellingPlace($sellingPlace)
    {
        $this->transaction->setSellingPlace($sellingPlace);
        return $this;
    }

    /**
     * @param $prePrint
     * @return $this
     */
    public function prePrint($prePrint)
    {
        $this->transaction->setPrePrint($prePrint);
        return $this;
    }

    /**
     * @param $entertainmentTaxableIncome
     * @return $this
     */
    public function entertainmentTaxableIncome($entertainmentTaxableIncome)
    {
        $this->transaction->setEntertainmentTaxableIncome($entertainmentTaxableIncome);
        return $this;
    }

    /**
     * @param $nulledOriginal
     * @return $this
     */
    public function nulledOriginal($nulledOriginal)
    {
        $this->transaction->setnulledOriginal($nulledOriginal);
        return $this;
    }

    /**
     * @param $nulledOriginalCard
     * @return $this
     */
    public function nulledOriginalCard($nulledOriginalCard)
    {
        $this->transaction->setNulledOriginalCard($nulledOriginalCard);
        return $this;
    }


    /**
     * @param $nulledCausal
     * @return $this
     */
    public function nulledCausal($nulledCausal)
    {
        $this->transaction->setNulledCausal($nulledCausal);
        return $this;
    }

    /**
     * @param $accessTitle AccessTitle
     * @return $this
     */
    public function accessTitle($accessTitle)
    {
        $this->transaction->setAccessTitle($accessTitle);
        return $this;
    }

    /**
     * @param $abonement
     * @return $this
     */
    public function abonement($abonement)
    {
        $this->transaction->setAbonement($abonement);
        return $this;
    }

    /**
     * @param $ticketSubscription
     * @return $this
     */
    public function ticketSubscription($ticketSubscription)
    {
        $this->transaction->setTicketSubscription($ticketSubscription);
        return $this;
    }

    /**
     * @return Transaction returns the newly built transaction
     */
    public function build()
    {
        return $this->transaction;
    }
}