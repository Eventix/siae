<?php

namespace SIAE\reporting\transactionLogs;

/**
 * Builder for the SIAE XML mapping.
 */
class TransactionLogBuilder
{
    /**
     * @var TransactionLog
     */
    private $transactionLog;

    public function __construct()
    {
        $this->transactionLog = new TransactionLog();
    }

    /**
     * @param []TransactionLog $transactions
     * @return $this
     */
    public function transactions($transactions)
    {
        $this->transactionLog->setTransactions($transactions);
        return $this;
    }
}