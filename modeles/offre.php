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

    function getListByFiltre($req)
    {
        global $connex;

        try
        {
            $ps = $connex->query($req);
            $offre = $ps->fetchAll();
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }

        return $offre;
    }

    function getInformations($categorie, $id)
    {
        global $connex;

        $req = 'SELECT %s AS id, titre
					FROM %s
						WHERE	%s = :id';

        $req = sprintf($req, $categorie . '_id', $GLOBALS['getFiltre'][$categorie], $categorie . '_id');

        try
        {
            $ps = $connex->prepare($req);
            $ps->bindValue(':id', $id);
            $ps->execute();
            $info = $ps->fetch();
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }


        return $info;
    }
}