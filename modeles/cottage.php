<?php

class M_cottage
{
    function getFullList()
    {
        global $connex;

        $req = 'SELECT * FROM cottages';
        $ps = $connex->query($req);
        $cottages = $ps->fetchAll();

        return $cottages;
    }
}