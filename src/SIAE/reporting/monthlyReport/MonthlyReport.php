<?php
namespace SIAE\reporting\monthlyReport;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use SIAE\common\model\CompanyHolder;
use SIAE\common\model\Organizer;



/** @XmlRoot("RiepilogoMensile") */
class MonthlyReport
{

    /**
     * @var int
     * @SerializedName("Mese")
     * @XmlAttribute
     */
    private $month;

    /**
     * @var CompanyHolder
     * @SerializedName("Titolare")
     */
    private $companyHolder;

    /**
     * @var Organizer
     * * @SerializedName("Organizzatore")
     */
    private $organizer;


    /**
     * @XmlAttribute
     * @SerializedName("DataGenerazione")
     */
    private $creationDate;

    /**
     * @XmlAttribute
     * @SerializedName("OraGenerazione")
     */
    private $generationTime;

    /**
     * @XmlAttribute
     * @SerializedName("ProgressivoGenerazione")
     */
    private $generationIncrementedNumber;

    /**
     * @XmlAttribute
     * @SerializedName("Sostituzione")
     */
    private $replacement;


    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param mixed $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return mixed
     */
    public function getGenerationTime()
    {
        return $this->generationTime;
    }

    /**
     * @param mixed $generationTime
     */
    public function setGenerationTime($generationTime)
    {
        $this->generationTime = $generationTime;
    }

    /**
     * @return mixed
     */
    public function getGenerationIncrementedNumber()
    {
        return $this->generationIncrementedNumber;
    }

    /**
     * @param mixed $generationIncrementedNumber
     */
    public function setGenerationIncrementedNumber($generationIncrementedNumber)
    {
        $this->generationIncrementedNumber = $generationIncrementedNumber;
    }

    /**
     * @return mixed
     */
    public function getReplacement()
    {
        return $this->replacement;
    }

    /**
     * @param mixed $replacement
     */
    public function setReplacement($replacement)
    {
        $this->replacement = $replacement;
    }

    /**
     * @return array
     */
    public function getCompanyHolder()
    {
        return $this->companyHolder;
    }

    /**
     * @param mixed $companyHolder
     */
    public function setCompanyHolder($companyHolder)
    {
        $this->companyHolder = $companyHolder;
    }

    /**
     * @return array
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @param mixed $organizer
     */
    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;
    }

    /**
     * @return int
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param int $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

}