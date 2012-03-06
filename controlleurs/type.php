<?php

include ('./modeles/type.php');

class C_type
{

    function __construct()
    {
        $this->type = new M_type();
    }

    function lister()
    {
        return $this->type->getFullList();
    }

}