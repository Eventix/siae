<?php

namespace SIAE\reporting\summaryControlAccesses\model;

use SIAE\common\builder\IBuilder;

class IssueSystemBuilder implements IBuilder
{
    /**
     * @var IssueSystem
     */
    private $issueSystem;


    public function __construct()
    {
        $this->issueSystem = new IssueSystem();
    }

    /**
     * Code of the issuing system provided by SIAE.
     * @param $code
     * @return $this
     */
    public function code($code)
    {
        $this->issueSystem->setCode($code);
        return $this;
    }

    /**
     * Titles children.
     * @param Title[] $titles
     * @return $this
     */
    public function titles($titles)
    {
        $this->issueSystem->setTitles($titles);
        return $this;

    }

    /**
     * Abonement children.
     * @param Abonement[] $abonements
     * @return $this
     */
    public function abonements($abonements)
    {
        $this->issueSystem->setAbonements($abonements);
        return $this;
    }

    /**
     * @return IssueSystem returns the newly built object
     */
    public function build()
    {
        return $this->issueSystem;
    }
}