<?php

class M_type
{

    function getFullList()
    {

        global $connex;
        $req = 'SELECT * FROM types';
        $ps = $connex->query($req);
        $types = $ps->fetchAll();

        return $types;
    }
}