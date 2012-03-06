<?php

include ('./modeles/pays.php');

class C_pays
{

    function __construct()
    {
        $this->pays = new M_pays();
    }

    function lister()
    {

        return $this->pays->getFullList();

    }
}