<?php

namespace SIAE\reporting\transactionLogs;


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
     * @param $transactions
     * @return $this
     */
    public function transactions($transactions)
    {
        $this->transactionLog->setTransactions($transactions);
        return $this;
    }
}