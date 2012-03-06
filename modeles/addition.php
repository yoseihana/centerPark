<?php

class M_addition
{

    function getFullList()
    {

        global $connex;
        $req = 'SELECT * FROM additions';
        $ps = $connex->query($req);
        $additions = $ps->fetchAll();

        return $additions;
    }
}