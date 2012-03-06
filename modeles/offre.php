<?php

class M_offre
{
    function getFullList()
    {
        global $connex;

        $req = 'SELECT * FROM offres';

        $ps = $connex->query($req); // fait la requête

        $offres = $ps->fetchAll(); //retourne le tout dans un tableau

        return $offres;
    }
}