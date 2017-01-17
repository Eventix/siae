<?php

namespace SIAE\reporting\transactionLog;

use SIAE\common\builder\IBuilder;

/**
 * Builder for the LTA SIAE XML mapping.
 * Log containing all the transactions in relation to the
 * the tickets sold.
 */
class TransactionLogBuilder implements IBuilder
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

    /**
     * @return TransactionLog returns the newly built object
     */
    public function build()
    {
        return $this->transactionLog;
    }
}