<?php

class M_duree
{

    function getFullList()
    {
        global $connex;

        $req = 'SELECT * FROM durees';
        $ps = $connex->query($req);

        $durees = $ps->fetchAll();

        return $durees;
    }

}