<?php

namespace SIAE\reporting\dailyTransactionLogs;

use SIAE\common\builder\IBuilder;

/**
 * Builder for the LTA (Lista Titoli Accessi) SIAE XML mapping.
 * Groups the events of the day and includes details about ticket
 * issued such as the price the "support" id, fiscal seal...
 *
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
     * System CA code.
     * @param $CASystem
     * @return $this
     */
    public function CASystem($CASystem)
    {
        $this->dailyTransactionLog->setCASystem($CASystem);
        return $this;
    }

    /**
     * Fiscal code of the system Owner
     * @param $CACFOwner
     * @return $this
     */
    public function CACFOwner($CACFOwner)
    {
        $this->dailyTransactionLog->setCACFOwner($CACFOwner);
        return $this;
    }

    /**
     * Format is YYYYMMDD.
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