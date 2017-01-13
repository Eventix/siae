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
     * Number of events the ticket gives the opportunity to attend.
     * @param int $quantityEnabledEvents
     * @return $this
     */
    public function quantityEnabledEvents($quantityEnabledEvents)
    {
        $this->abonement->setQuantityEnabledEvents($quantityEnabledEvents);
        return $this;
    }


    /**
     * Day corresponding to the last day on which it is possible to
     * take advantage of the abonement.
     * Format is YYYYMMDD.
     * @param $validity
     * @return $this
     */
    public function validity($validity)
    {
        $this->abonement->setValidity($validity);
        return $this;
    }


    /**
     * Rateo.
     * // TODO ask regoli
     * @param $accrual
     * @return $this
     */
    public function accrual($accrual)
    {
        $this->abonement->setAccrual($accrual);
        return $this;
    }


    /**
     * Rate intrattenimento
     * // TODO ask regoli
     * @param $entertainmentAccrual
     * @return $this
     */
    public function entertainmentAccrual($entertainmentAccrual)
    {
        $this->abonement->setEntertainmentAccrual($entertainmentAccrual);
        return $this;
    }


    /**
     * VAT related to rateo.
     * @param $VATAccrual
     * @return $this
     */
    public function vatAccrual($VATAccrual)
    {
        $this->abonement->setVATAccrual($VATAccrual);
        return $this;
    }


    /**
     * Total amount for the operations.
     * Includes VAT and eventually an extra fee referring to the
     * abonement code.
     * It does not include the preSale.
     * @param $gross
     * @return $this
     */
    public function gross($gross)
    {
        $this->abonement->setGross($gross);
        return $this;
    }

    /**
     * Amount related to the preSale including VAT.
     * If that is referring to nulled access titles or abonements
     * it has to be evaluated only if the preSale amount was reimbursed.
     * @param $preSale
     * @return $this
     */
    public function preSale($preSale)
    {
        $this->abonement->setPreSale($preSale);
        return $this;
    }


    /**
     * VAT referring to the gross amount.
     * @param $VAT
     * @return $this
     */
    public function VAT($VAT)
    {
        $this->abonement->setVAT($VAT);
        return $this;
    }


    /**
     * VAT applied to preSale.
     * If that is referred to tickets that were nulled,
     * it has to be evaluated only if the preSale amount
     * was reimbursed.
     * @param $preSaleVAT
     * @return $this
     */
    public function preSaleVAT($preSaleVAT)
    {
        $this->abonement->setPreSaleVAT($preSaleVAT);
        return $this;
    }


    /**
     * Code provided by SIAE identifying the location.
     * @param $localCode
     * @return $this
     */
    public function localCode($localCode)
    {
        $this->abonement->setLocalCode($localCode);
        return $this;
    }


    /**
     * Event date.
     * Format is YYYYMMDD.
     * @param $eventDate
     * @return $this
     */
    public function eventDate($eventDate)
    {
        $this->abonement->setEventDate($eventDate);
        return $this;
    }


    /**
     * Event time.
     * Format is HHMM.
     * @param $eventTime
     * @return $this
     */
    public function eventTime($eventTime)
    {
        $this->abonement->setEventTime($eventTime);
        return $this;
    }


    /**
     * Event genre.
     * It can be found in TAB 1, page 18,
     * AppMisuratoriFiscali.pdf.
     * @param $genreType
     * @return $this
     */
    public function genreType($genreType)
    {
        $this->abonement->setGenreType($genreType);
        return $this;
    }


    /**
     * Title of the event.
     * @param $title
     * @return $this
     */
    public function title($title)
    {
        $this->abonement->setTitle($title);
        return $this;
    }


    /**
     * Abonement code.
     * @param $abonementCode
     * @return $this
     */
    public function abonementCode($abonementCode)
    {
        $this->abonement->setAbonementCode($abonementCode);
        return $this;
    }


    /**
     * Abonement code auto-incremented value.
     * @param $incrementedAbonementCounter
     * @return $this
     */
    public function incrementedAbonementCounter($incrementedAbonementCounter)
    {
        $this->abonement->setIncrementedAbonementCounter($incrementedAbonementCounter);
        return $this;
    }


    /**
     * Fiscal code printed on the issued abonement.
     * @param $fiscalCode
     * @return $this
     */
    public function fiscalCode($fiscalCode)
    {
        $this->abonement->setFiscalCode($fiscalCode);
        return $this;
    }


    /**
     * Gross value.
     * Might be referring to the accrual (rateo) or
     * at the titles issued with released VAT.
     * @param $notionalAmount
     * @return $this
     */
    public function notionalAmount($notionalAmount)
    {
        $this->abonement->setNotionalAmount($notionalAmount);
        return $this;
    }


    /**
     * VAT referring to the notional amount.
     * @param $notionalVAT
     * @return $this
     */
    public function notionalVAT($notionalVAT)
    {
        $this->abonement->setNotionalVAT($notionalVAT);
        return $this;
    }

    /**
     * VAT referring to the preSale.
     * @param $vatPreSale
     */
    public function VATpreSale($vatPreSale)
    {
        $this->abonement->setPreSaleVAT($vatPreSale);
    }


    /**
     * Example:
     *
     * F - Fisso (fixed) (default) This abonement is linked to a specific event.
     * L - Libero (free) is a free to choose Ticket for which event you want to attend.
     *
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