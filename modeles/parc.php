<?php

class M_parc
{

    function getFullList()
    {

        global $connex;
        $req = 'SELECT * FROM parcs';
        $ps = $connex->query($req);
        $parcs = $ps->fetchAll();

        return $parcs;
    }
}