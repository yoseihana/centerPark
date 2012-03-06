<?php

include ('./modeles/addition.php');

class C_addition
{

    function __construct()
    {
        $this->addition = new M_addition();
    }

    function lister()
    {
        return $this->addition->getFullList();
    }

}