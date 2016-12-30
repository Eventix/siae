<?php
namespace SIAE\reporting\dailyTransactionLogs;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use SIAE\common\model\CompanyHolder;
use SIAE\common\model\Organizer;
use SIAE\reporting\dailyTransactionLogs\model\LTAEvent;


/** @XmlRoot("LTA_Giornaliera") */
class DailyTransactionLog
{
    /**
     * @var LTAEvent
     * @SerializedName("LTA_Evento")
     */
    private $ltaEvent;

    /** @XmlAttribute
     * @SerializedName("SistemaCA")
     */
    private $CASystem;

    /** @XmlAttribute
     * @SerializedName("CFTitolareCA")
     */
    private $CACFOwner;
    /** @XmlAttribute
     * @SerializedName("DataLTA")
     */
    private $transactionLogDate;

    /**
     * @return LTAEvent
     */
    public function getLtaEvent()
    {
        return $this->ltaEvent;
    }

    /**
     * @param LTAEvent $ltaEvent
     */
    public function setLtaEvent($ltaEvent)
    {
        $this->ltaEvent = $ltaEvent;
    }

    /**
     * @return mixed
     */
    public function getCASystem()
    {
        return $this->CASystem;
    }

    /**
     * @param mixed $CASystem
     */
    public function setCASystem($CASystem)
    {
        $this->CASystem = $CASystem;
    }

    /**
     * @return mixed
     */
    public function getCACFOwner()
    {
        return $this->CACFOwner;
    }

    /**
     * @param mixed $CACFOwner
     */
    public function setCACFOwner($CACFOwner)
    {
        $this->CACFOwner = $CACFOwner;
    }

    /**
     * @return mixed
     */
    public function getTransactionLogDate()
    {
        return $this->transactionLogDate;
    }

    /**
     * @param mixed $transactionLogDate
     */
    public function setTransactionLogDate($transactionLogDate)
    {
        $this->transactionLogDate = $transactionLogDate;
    }


}