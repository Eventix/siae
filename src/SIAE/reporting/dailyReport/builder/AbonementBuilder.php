<?php

namespace SIAE\reporting\dailyReport\builder;


use SIAE\common\builder\IBuilder;
use SIAE\common\model\NulledAbonements;
use SIAE\reporting\dailyReport\model\Abonements;
use SIAE\common\model\TaxationType;
use SIAE\common\model\Turn;

class AbonementBuilder implements IBuilder
{
    /**
     * @var Abonements
     */
    private $abonement;

    public function __construct()
    {
        $this->abonement = new Abonements();
    }

    /**
     *
     * Example:
     *
     * F - Fisso (fixed) (default) This abonement is linked to a specific event.
     * L - Libero (free) is a free to choose Ticket for which event you want to attend.
     *
     * @param String $turn
     * @return AbonementBuilder
     */
    public function turn($turn)
    {
        $this->abonement->setTurn(new Turn($turn));
        return $this;
    }


    /**
     * @param mixed $code
     * @return $this AbonementsBuilders
     */
    public function code($code)
    {
        $this->abonement->setCode($code);
        return $this;
    }

    /**
     * Untill which date the abonement is valid.
     * (last event(date) you can get access to with this abonement)
     *
     * @param mixed $validity format (YYYYMMDD)
     * @return $this AbonementsBuilders
     */
    public function validity($validity)
    {
        $this->abonement->setValidity($validity);
        return $this;
    }

    /**
     * Accepted values are I (entertainment) or S (of only show).
     * The taxation depends on it.
     * @param mixed TaxationType $taxationType
     * @return $this AbonementsBuilders
     */
    public function taxationType($taxationType)
    {
        $this->abonement->setTaxationType($taxationType);
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
        $this->abonement->setOrderCode($orderCode);
        return $this;
    }

    /**
     * Gives some kind of information about the discount type of ticket used
     * for example special ticket for military or elderly people
     *
     * Allowed values:
     * I1 - Intero (default)
     * MC - Museum Card
     * TC - Tourist Card
     * Find out more in the TAB 3.
     * @param mixed $titleType
     * @return $this AbonementsBuilders
     */
    public function titleType($titleType)
    {
        $this->abonement->setTitleType($titleType);
        return $this;
    }

    /**
     * @param mixed $amountOfValidatedEvent
     * @return $this AbonementsBuilders
     */
    public function amountOfValidatedEvent($amountOfValidatedEvent)
    {
        $this->abonement->setAmountOfValidatedEvent($amountOfValidatedEvent);
        return $this;
    }

    /**
     * @param $issuedAbonements
     * @return $this AbonementsBuilders
     */
    public function issuedAbonements($issuedAbonements)
    {
        $this->abonement->setReleasedAbonements($issuedAbonements);
        return $this;
    }

    /**
     * @param NulledAbonements $nulledAbonements
     * @return $this AbonementsBuilders
     */
    public function nulledAbonements($nulledAbonements)
    {
        $this->abonement->setNulledAbonements($nulledAbonements);
        return $this;
    }

    /**
     * @return Abonements
     */
    public function build()
    {
        return $this->abonement;
    }
}