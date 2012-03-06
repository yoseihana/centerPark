<?php

class M_region
{

    function getFullList()
    {

        global $connex;
        $req = 'SELECT * FROM regions';
        $ps = $connex->query($req);
        $regions = $ps->fetchAll();

        return $regions;
    }
}