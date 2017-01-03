<?php


namespace SIAE\reporting\transactionLogs;

/** @XmlRoot("LogTransazione") */
class TransactionLog
{
    /**
     * @var []Transaction
     * @XmlList(inline = true, entry = "Transazione")
     */
    public $transactions;

    /**
     * @return []Transaction
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param []Transaction $transactions
     */
    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;
    }

}