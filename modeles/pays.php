<?php

class M_pays
{
    function getFullList()
    {
        global $connex;

        $req = 'SELECT * FROM pays';
        $ps = $connex->query($req);

        $pays = $ps->fetchAll();

        return $pays;
    }

}