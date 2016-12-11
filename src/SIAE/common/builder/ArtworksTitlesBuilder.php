<?php

namespace SIAE\common\builder;


use SIAE\common\model\ArtworksTitles;

class ArtworksTitlesBuilder implements IBuilder
{
    /**
     * @var ArtworksTitles
     */
    private $artworksTitles;


    public function __construct()
    {
        $this->artworksTitles = new ArtworksTitles();
    }

    /**
     * @param mixed $title
     * @return ArtworksTitlesBuilder
     */
    public function title($title)
    {
        $this->artworksTitles->setTitle($title);
        return $this;
    }

    /**
     * @param mixed $author
     * @return ArtworksTitlesBuilder
     */
    public function author($author)
    {
        $this->artworksTitles->setAuthor($author);
        return $this;
    }

    /**
     * @param mixed $executor
     * @return ArtworksTitlesBuilder
     */
    public function executor($executor)
    {
        $this->artworksTitles->setExecutor($executor);
        return $this;
    }

    /**
     * @return ArtworksTitles
     */
    public function build()
    {
        return $this->artworksTitles;
    }
}