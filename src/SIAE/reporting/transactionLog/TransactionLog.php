<?php


namespace SIAE\reporting\transactionLog;

use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;

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