<?php

namespace SIAE\reporting\dailyTransactionLogs\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** @XmlRoot("Supporto") */
class Support
{
    /**
     * @XmlAttribute
     * @SerializedName("CodSupportoId")
     */
    private $supportIdCode;

    /**
     * @XmlAttribute
     * @SerializedName("TipoSupportoId")
     */
    private $supportTypeId;

    /**
     * @return string
     */
    public function getSupportTypeId()
    {
        return $this->supportTypeId;
    }

    /**
     * @param string $supportTypeId
     */
    public function setSupportTypeId($supportTypeId)
    {
        $this->supportTypeId = $supportTypeId;
    }

    /**
     * @return string
     */
    public function getSupportIdCode()
    {
        return $this->supportIdCode;
    }

    /**
     * @param string $supportIdCode
     */
    public function setSupportIdCode($supportIdCode)
    {
        $this->supportIdCode = $supportIdCode;
    }


}