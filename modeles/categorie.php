<?php

class M_categorie
{
    function getFullList()
    {
        global $connex;

        $req = 'SELECT * FROM categories';
        $ps = $connex->query($req);
        $categories = $ps->fetchAll();

        return $categories;
    }
}