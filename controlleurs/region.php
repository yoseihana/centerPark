<?php

include ('./modeles/region.php');

class C_region
{

    function __construct()
    {
        $this->region = new M_region();
    }

    function lister()
    {
        return $this->region->getFullList();
    }

}