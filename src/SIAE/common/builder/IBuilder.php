<?php

namespace SIAE\common\builder;


interface IBuilder
{
    /**
     * @return Object returns the newly built object
     */
    public function build();
}