<?php

include ('./modeles/categorie.php');

class C_categorie
{

    function __construct()
    {
        $this->categorie = new M_categorie();
    }

    function lister()
    {
        return $this->categorie->getFullList();
    }

}