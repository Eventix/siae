<?php

namespace SIAE\common\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("TitoliOpere") */
class ArtworksTitles
{
    /** @SerializedName("Titolo") */
    private $title;
    /** @SerializedName("ProduttoreCinema") */
    private $cinemaProducer;
    /** @SerializedName("Autore") */
    private $author;
    /** @SerializedName("Esecutore") */
    private $executor;
    /** @SerializedName("Nazionalita") */
    private $nationality;
    /** @SerializedName("Distributore") */
    private $distributor;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getExecutor()
    {
        return $this->executor;
    }

    /**
     * Name of the band, artist or orchestra.
     * @param mixed $executor
     */
    public function setExecutor($executor)
    {
        $this->executor = $executor;
    }

    /**
     * @return mixed
     */
    public function getCinemaProducer()
    {
        return $this->cinemaProducer;
    }

    /**
     * @param mixed $cinemaProducer
     */
    public function setCinemaProducer($cinemaProducer)
    {
        $this->cinemaProducer = $cinemaProducer;
    }

    /**
     * @return mixed
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param mixed $nationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    /**
     * @return mixed
     */
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * @param mixed $distributor
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;
    }
}