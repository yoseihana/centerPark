<?php
include ('./modeles/offre.php');

class C_offre
{
    function __construct()
    {
        $this->offre = new M_offre(); //construction, il est nécessaire car il construit celon la fonction M_offre, instantiation du modèle
    }

    function lister()
    {

        include ('pays.php');
        include ('duree.php');
        include ('region.php');
        include ('parc.php');
        include ('addition.php');
        include ('type.php');

        global $a, $c;

        //Instantiation
        $this->pays = new C_pays(); // instantiation pr le controlleur
        $this->duree = new C_duree();
        $this->region = new C_region();
        $this->parc = new C_parc();
        $this->addition = new C_addition();
        $this->type = new C_type();

        $data['offre'] = $this->offre->getFullList(); //execute la fonction avec les éléments de la req de getFullList
        $data['pays'] = !isset($_SESSION['filtre_activer']) ? $this->pays->lister() : NULL; //ce qu'il faudra faire + tard pr avoir toutes les infos, ne pas oublié d'inclure les ≠ modèle
        $data['duree'] = $this->duree->lister();
        $data['region'] = $this->region->lister();
        $data['parc'] = $this->parc->lister();
        $data['addition'] = $this->addition->lister();
        $data['type'] = $this->type->lister();
        $html = $a . $c . '.php';

        return array('data' => $data, 'html' => $html);
    }

    function ajouterFiltre()
    {

        $type = $_GET['categorie'];

        $_SESSION['filtre_activer'][$type] = $_GET['id'];

        header('Location: index.php');
    }
}

