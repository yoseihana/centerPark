<?php

include ('./modeles/parc.php');

class C_parc
{

    function __construct()
    {
        $this->parc = new M_parc();
    }

    function lister()
    {
        return $this->parc->getFullList();
    }

}