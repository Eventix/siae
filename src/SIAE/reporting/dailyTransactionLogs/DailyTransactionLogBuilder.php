<?php

namespace SIAE\reporting\dailyTransactionLogs;

use SIAE\common\builder\IBuilder;
use SIAE\common\model\CompanyHolder;
use SIAE\common\model\Organizer;

/**
 * Builder for the LTA SIAE XML mapping.
 */
class DailyTransactionLogBuilder implements IBuilder
{
    /**
     * @var DailyTransactionLog
     */
    private $dailyTransactionLog;

    /**
     * DailyTransactionLog constructor.
     */
    public function __construct()
    {
        $this->dailyTransactionLog = new DailyTransactionLog();
    }

    /**
     * Pass in transaction log child
     * @param LTAEvent
     * @return $this;
     */
    public function ltaEvent($ltaEvent)
    {
        $this->dailyTransactionLog->setLtaEvent($ltaEvent);
        return $this;
    }

    /**
     * @param $CASystem
     * @return $this
     */
    public function CASystem($CASystem)
    {
        $this->dailyTransactionLog->setCASystem($CASystem);
        return $this;
    }

    /**
     * @param $CACFOwner
     * @return $this
     */
    public function CACFOwner($CACFOwner)
    {
        $this->dailyTransactionLog->setCACFOwner($CACFOwner);
        return $this;
    }

    /**
     * @param $transactionLogDate
     * @return $this
     */
    public function transactionLogDate($transactionLogDate)
    {
        $this->dailyTransactionLog->setTransactionLogDate($transactionLogDate);
        return $this;
    }

    /**
     * @return DailyTransactionLog dailyTransactionLog
     */
    public function build()
    {
        return $this->dailyTransactionLog;
    }
}