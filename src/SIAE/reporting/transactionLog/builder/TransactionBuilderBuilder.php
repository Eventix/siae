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
     * Fiscal code of the person who owns the control system.
     * @param $CFOrganizer
     * @return $this
     */
    public function cfOrganizer($CFOrganizer)
    {
        $this->transaction->setCFOrganizer($CFOrganizer);
        return $this;
    }


    /**
     * Fiscal code of the owner.
     * @param $CFOwner
     */
    public function cfOwner($CFOwner)
    {
        $this->transaction->setCFOwner($CFOwner);
    }


    /**
     * // TODO ask regoli
     * Information regarding whether the issuing
     * happens having released the VAT.
     * Allowed values are
     * - N (normal - VAT was not released)
     * - F (VAT was released and receipt was made)
     * - B (VAT was released upon making an abonement)
     * @param $VATreleased
     */
    public function VATreleased($VATreleased)
    {
        $this->transaction->setVATreleased($VATreleased);
    }


    /**
     * Accepted values are I (entertainment) or S (of only show).
     * The taxation depends on it.
     * @param $taxationType
     * @return $this
     */
    public function taxationType($taxationType)
    {
        $this->transaction->setTaxationType($taxationType);
        return $this;
    }

    /**
     * Accepted values are E (euro) or L (lire).
     * @param $currency
     * @return $this
     */
    public function currency($currency)
    {
        $this->transaction->setCurrency($currency);
        return $this;
    }

    /**
     * SIAE code of the issuing system.
     * @param $issuingSystem
     * @return $this
     */
    public function issuingSystem($issuingSystem)
    {
        $this->transaction->setIssuingSystem($issuingSystem);
        return $this;
    }

    /**
     * Number of the activation card released by SIAE.
     * @param $activationCard
     * @return $this
     */
    public function activationCard($activationCard)
    {
        $this->transaction->setActivationCard($activationCard);
        return $this;
    }

    /**
     * Safety seal created for each transaction.
     * @param $fiscalSigilloCode
     * @return $this
     */
    public function fiscalSigilloCode($fiscalSigilloCode)
    {
        $this->transaction->setFiscalSigilloCode($fiscalSigilloCode);
        return $this;
    }

    /**
     * Date on which the transaction was issued.
     * Format is YYYYMMDD.
     * @param $issuedDate
     * @return $this
     */
    public function issuedDate($issuedDate)
    {
        $this->transaction->setIssuedDate($issuedDate);
        return $this;
    }

    /**
     * Time at which the transaction was issued.
     * Format is HHMMSS.
     * @param $issuedTime
     * @return $this
     */
    public function issuedTime($issuedTime)
    {
        $this->transaction->setIssuedTime($issuedTime);
        return $this;
    }

    /**
     * Unique-auto-incremented number.
     * @param $incrementedCounter
     * @return $this
     */
    public function incrementedCounter($incrementedCounter)
    {
        $this->transaction->setIncrementedCounter($incrementedCounter);
        return $this;
    }

    /**
     * Allowed values:
     * I1 - Intero
     * MC - Meseum Card
     * TC - Tourist Card
     * Find out more in the TAB 3.
     * @param $titleType
     * @return $this
     */
    public function titleType($titleType)
    {
        $this->transaction->setTitleType($titleType);
        return $this;
    }

    /**
     * Identifier of the area assigned for the event.
     * The allowed values should be extracted from Misuratori Fiscali doc (AppMisuratoriFiscali.pdf)
     * Table 2 page 20.
     * In case the area was not found in the table, a unique one should
     * be assigned instead.
     * (Unique meaning that no two areas with such code exists)
     * E.G.:
     * AA - Ring A
     * AB - Ring B
     * ...
     *
     * Default: (use custom section area code)
     *
     * @param $orderCode
     * @return $this
     */
    public function orderCode($orderCode)
    {
        $this->transaction->setOrderCode($orderCode);
        return $this;
    }

    /**
     * Only in case the transaction was nulled.
     * Allowed values:
     * 001 - Compilation errors
     * 002 - Print not valid
     * 003 - Incomplete Transaction
     * 004 - Request nulled by client
     * 005 - Request nulled by service reasons
     * @param $causal
     * @return $this
     */
    public function causal($causal)
    {
        $this->transaction->setCausal($causal);
        return $this;
    }

    /**
     * Assigned sit code (E.G: row: H number: 13,
     * therefore the code is H13)
     * @param $place
     * @return $this
     */
    public function place($place)
    {
        $this->transaction->setPlace($place);
        return $this;
    }

    /**
     * Code of the place that made the transaction.
     * It has to be reported on the ticket.
     * @param $sellingPlace
     * @return $this
     */
    public function sellingPlace($sellingPlace)
    {
        $this->transaction->setSellingPlace($sellingPlace);
        return $this;
    }

    /**
     * // TODO ask regoli
     * @param $prePrint
     * @return $this
     */
    public function prePrint($prePrint)
    {
        $this->transaction->setPrePrint($prePrint);
        return $this;
    }

    /**
     * // TODO ask regoli
     * Taxable income based on the entertainment related to the access titles.
     * @param $entertainmentTaxableIncome
     * @return $this
     */
    public function entertainmentTaxableIncome($entertainmentTaxableIncome)
    {
        $this->transaction->setEntertainmentTaxableIncome($entertainmentTaxableIncome);
        return $this;
    }

    /**
     * Unique number of the nulled title.
     * @param $nulledOriginal
     * @return $this
     */
    public function nulledOriginal($nulledOriginal)
    {
        $this->transaction->setnulledOriginal($nulledOriginal);
        return $this;
    }

    /**
     * // TODO ask regoli
     * @param $nulledOriginalCard
     * @return $this
     */
    public function nulledOriginalCard($nulledOriginalCard)
    {
        $this->transaction->setNulledOriginalCard($nulledOriginalCard);
        return $this;
    }


    /**
     * // TODO ask regoli
     * @param $nulledCausal
     * @return $this
     */
    public function nulledCausal($nulledCausal)
    {
        $this->transaction->setNulledCausal($nulledCausal);
        return $this;
    }

    /**
     *
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
     * @param $ticketAbonement
     * @return $this
     */
    public function ticketAbonement($ticketAbonement)
    {
        $this->transaction->setTicketAbonement($ticketAbonement);
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