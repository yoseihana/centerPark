<?php

include ('./modeles/cottage.php');

class C_cottage
{
    function __construct()
    {
        $this->cottage = new M_cottage();

    }

    function lister()
    {
        return $this->cottage->getFUllList();
    }
}