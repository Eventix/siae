<?php

namespace SIAE\common\builder;


use SIAE\common\model\NulledSubscriptions;
use SIAE\common\model\Subscriptions;
use SIAE\common\model\Turn;

class SubscriptionsBuilder implements IBuilder
{
    /**
     * @var Subscriptions
     */
    private $subscriptions;

    public function __construct()
    {
        $this->subscriptions = new Subscriptions();
    }

    /**
     *
     * Example:
     *
     * F - Fisso (fixed) (default) This subscription is linked to a specific event.
     * L - Libero (free) is a free to choose Ticket for which event you want to attend.
     *
     * @param String $turn
     * @return SubscriptionsBuilder
     */
    public function turn($turn)
    {
        $this->subscriptions->setTurn(new Turn($turn));
        return $this;
    }


    /**
     * @param mixed $code
     * @return $this SubscriptionsBuilders
     */
    public function code($code)
    {
        $this->subscriptions->setCode($code);
        return $this;
    }

    /**
     * Untill which date the subscription is valid.
     * (last event(date) you can get access to with this subscription)
     *
     * @param mixed $validity format (YYYYMMDD)
     * @return $this SubscriptionsBuilders
     */
    public function validity($validity)
    {
        $this->subscriptions->setValidity($validity);
        return $this;
    }

    /**
     * Accepted values are I (entertainment) or S (of only show).
     * The taxation depends on it.
     * @param mixed $taxationType
     * @return $this SubscriptionsBuilders
     */
    public function taxationType($taxationType)
    {
        $this->subscriptions->setTaxationType($taxationType);
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
        $this->subscriptions->setOrderCode($orderCode);
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
     * @return $this SubscriptionsBuilders
     */
    public function titleType($titleType)
    {
        $this->subscriptions->setTitleType($titleType);
        return $this;
    }

    /**
     * @param mixed $amountOfValidatedEvent
     * @return $this SubscriptionsBuilders
     */
    public function amountOfValidatedEvent($amountOfValidatedEvent)
    {
        $this->subscriptions->setAmountOfValidatedEvent($amountOfValidatedEvent);
        return $this;
    }

    /**
     * @param $releasedSubscriptions
     * @return $this SubscriptionsBuilders
     */
    public function releasedSubscriptions($releasedSubscriptions)
    {
        $this->subscriptions->setReleasedSubscriptions($releasedSubscriptions);
        return $this;
    }

    /**
     * @param NulledSubscriptions $nulledSubscriptions
     * @return $this SubscriptionsBuilders
     */
    public function nulledSubscriptions($nulledSubscriptions)
    {
        $this->subscriptions->setNulledSubscriptions($nulledSubscriptions);
        return $this;
    }

    /**
     * @return Subscriptions
     */
    public function build()
    {
        return $this->subscriptions;
    }
}