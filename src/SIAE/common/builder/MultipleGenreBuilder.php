<?php


namespace SIAE\common\builder;

use SIAE\common\model\ArtworksTitles;
use SIAE\common\model\MultipleGenre;

class MultipleGenreBuilder implements IBuilder
{
    /**
     * @var MultipleGenre
     */
    private $multipleGenre;


    public function __construct()
    {
        $this->multipleGenre = new MultipleGenre();
    }

    /**
     * @param mixed $genreType
     * @return MultipleGenreBuilder
     */
    public function genreType($genreType)
    {
        $this->multipleGenre->setGenreType($genreType);
        return $this;
    }

    /**
     * @param mixed $incidenceGenre
     * @return MultipleGenreBuilder
     */
    public function incidenceGenre($incidenceGenre)
    {
        $this->multipleGenre->setIncidenceGenre($incidenceGenre);
        return $this;
    }

    /**
     * @param ArtworksTitles $artworksTitles
     * @return MultipleGenreBuilder
     */
    public function artworksTitles($artworksTitles)
    {
        $this->multipleGenre->setArtworksTitles($artworksTitles);
        return $this;
    }

    /**
     * @return MultipleGenre
     */
    public function build()
    {
        return $this->multipleGenre;
    }
}