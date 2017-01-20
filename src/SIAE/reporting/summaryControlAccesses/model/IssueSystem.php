<?php

namespace SIAE\reporting\summaryControlAccesses\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;

/** @XmlRoot("SistemaEmissione") */
class IssueSystem
{
    /**
     * @SerializedName("CodiceSistemaEmissione")
     * @var string
     */
    private $code;
    /**
     * @XmlList(inline = true, entry = "Titoli")
     * @var []Title
     */
    private $titles;
    /**
     * @SerializedName("Abbonamenti")
     * @var []Abonement
     */
    private $abonements;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getTitles()
    {
        return $this->titles;
    }

    /**
     * @param mixed $titles
     */
    public function setTitles($titles)
    {
        $this->titles = $titles;
    }

    /**
     * @return mixed
     */
    public function getAbonements()
    {
        return $this->abonements;
    }

    /**
     * @param mixed $abonements
     */
    public function setAbonements($abonements)
    {
        $this->abonements = $abonements;
    }


}