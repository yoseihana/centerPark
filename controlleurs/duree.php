<?php
include ('modeles/duree.php');

class C_duree
{
    function __construct()
    {
        $this->duree = new M_duree();
    }

    function lister()
    {

        return $this->duree->getFullList();
    }
}