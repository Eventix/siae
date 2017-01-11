<?php

namespace SIAE\reporting\dailyTransactionLogs\builder;

use SIAE\common\builder\IBuilder;
use SIAE\reporting\dailyTransactionLogs\model\Support;

/** @XmlRoot("Supporto") */
class SupportBuilder implements IBuilder
{
    private $support;

    public function __construct()
    {
        $this->support = new Support();
    }

    /**
     * @param $supportTypeId
     * @return $this
     */
    public function supportTypeId($supportTypeId)
    {
        $this->support->setSupportTypeId($supportTypeId);
        return $this;
    }

    /**
     * Identification code for the title medium presented at the access control.
     * @param $supportIdCode
     * @return $this
     */
    public function supportIdCode($supportIdCode)
    {
        $this->support->setSupportIdCode($supportIdCode);
        return $this;
    }

    /**
     * @return Support
     */
    public function build()
    {
        return $this->support;
    }
}