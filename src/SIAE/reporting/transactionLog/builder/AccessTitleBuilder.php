<?php

namespace SIAE\reporting\transactionLog\builder;

use SIAE\reporting\transactionLog\model\AccessTitle;
use SIAE\reporting\transactionLog\model\Complementary;

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
     * Provided by SIAE.
     * @param $localCode
     * @return $this
     */
    public function localCode($localCode)
    {
        $this->accessTitle->setLocalCode($localCode);
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
        $this->accessTitle->setEventDate($eventDate);
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
        $this->accessTitle->setEventTime($eventTime);
        return $this;
    }

    /**
     * Genre of the event.
     * See TAB1 in AppMisuratoriFiscali.pdf
     * E.G:
     * cinema, teatro, calcio...
     * @param $genreType
     * @return $this
     */
    public function genreType($genreType)
    {
        $this->accessTitle->setGenreType($genreType);
        return $this;
    }

    /**
     * Title of the event.
     * @param $title
     * @return $this
     */
    public function title($title)
    {
        $this->accessTitle->setTitle($title);
        return $this;
    }

    /**
     * Complementary child.
     * @param Complementary $complementary
     * @return $this
     */
    public function complementary($complementary)
    {
        $this->accessTitle->setComplementary($complementary);
        return $this;
    }

    /**
     * Allowed values:
     * I1 - Intero
     * MC - Meseum Card
     * TC - Tourist Card
     * Find out more in the TAB 3.
     * @param $type
     * @return $this
     */
    public function titleType($type)
    {
        $this->accessTitle->setType($type);
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
        $this->accessTitle->setGross($gross);
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
        $this->accessTitle->setPreSale($preSale);
        return $this;
    }

    /**
     * VAT related to the gross value.
     * @param $VAT
     * @return $this
     */
    public function VAT($VAT)
    {
        $this->accessTitle->setVAT($VAT);
        return $this;
    }

    /**
     * VAT referring to the preSale.
     * @param $VATpreSale
     * @return $this
     */
    public function vatPreSale($VATpreSale)
    {
        $this->accessTitle->setVATpreSale($VATpreSale);
        return $this;
    }


}