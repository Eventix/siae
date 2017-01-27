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
     * @param mixed $validity
     * @return $this SubscriptionsBuilders
     */
    public function validity($validity)
    {
        $this->subscriptions->setValidity($validity);
        return $this;
    }

    /**
     * @param mixed $taxationType
     * @return $this SubscriptionsBuilders
     */
    public function taxationType($taxationType)
    {
        $this->subscriptions->setTaxationType($taxationType);
        return $this;
    }

    /**
     * @param mixed $orderCode
     * @return $this SubscriptionsBuilders
     */
    public function orderCode($orderCode)
    {
        $this->subscriptions->setOrderCode($orderCode);
        return $this;
    }

    /**
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