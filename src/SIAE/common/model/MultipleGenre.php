<?php

namespace SIAE\common\model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** @XmlRoot("MultiGenere") */
class MultipleGenre
{
    /** @SerializedName("TipoGenere") */
    private $genreType;
    /** @SerializedName("IncidenzaGenere") */
    private $incidenceGenre;
    /** @SerializedName("TitoliOpere") */
    private $artworksTitles;

    /**
     * @return mixed
     */
    public function getGenreType()
    {
        return $this->genreType;
    }

    /**
     * @param mixed $genreType
     */
    public function setGenreType($genreType)
    {
        $this->genreType = $genreType;
    }

    /**
     * @return mixed
     */
    public function getIncidenceGenre()
    {
        return $this->incidenceGenre;
    }

    /**
     * @param mixed $incidenceGenre
     */
    public function setIncidenceGenre($incidenceGenre)
    {
        $this->incidenceGenre = $incidenceGenre;
    }

    /**
     * @return mixed
     */
    public function getArtworksTitles()
    {
        return $this->artworksTitles;
    }

    /**
     * @param mixed $artworksTitles
     */
    public function setArtworksTitles($artworksTitles)
    {
        $this->artworksTitles = $artworksTitles;
    }

}