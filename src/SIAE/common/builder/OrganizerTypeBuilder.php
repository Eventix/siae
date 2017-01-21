<?php

namespace SIAE\common\builder;


use SIAE\common\model\OrganizerType;

class OrganizerTypeBuilder implements IBuilder
{
    /**
     * @var OrganizerType
     */
    private $organizerType;

    public function __construct()
    {
        $this->organizerType = new OrganizerType();
    }

    /**
     * Organizer type must be E , P or G.
     * Allowed values: E (essay), P (related to church), G (generic).
     * @param $value
     * @return $this
     */
    public function value($value)
    {
        $this->organizerType->setValue($value);
        return $this;
    }

    /**
     * @return OrganizerType returns the newly built object
     */
    public function build()
    {
        return $this->organizerType;
    }
}