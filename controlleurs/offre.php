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
        include ('categorie.php');
        include ('cottage.php');


        global $a, $c;

        //Instantiation
        $this->pays = new C_pays(); // instantiation pr le controlleur
        $this->duree = new C_duree();
        $this->region = new C_region();
        $this->parc = new C_parc();
        $this->addition = new C_addition();
        $this->type = new C_type();
        $this->categorie = new C_categorie();
        $this->cottage = new C_cottage();

        $data['offre'] = $this->offre->getFullList(); //execute la fonction avec les éléments de la req de getFullList
        $data['pays'] = $this->pays->lister(); //ce qu'il faudra faire + tard pr avoir toutes les infos, ne pas oublié d'inclure les ≠ modèle
        $data['duree'] = $this->duree->lister();
        $data['region'] = $this->region->lister();
        $data['parc'] = $this->parc->lister();
        $data['addition'] = $this->addition->lister();
        $data['type'] = $this->type->lister();
        $data['categorie'] = $this->categorie->lister();
        $data['cottage'] = $this->cottage->lister();

        $html = $a . $c . '.php';

        return array('data' => $data, 'html' => $html);
    }

    function ajouterFiltre()
    {

        $type = $_GET['categorie'];

        $_SESSION['filtreCourant'][$type] = $_GET['id'];

        header('Location: index.php');
    }

    function voir()
    {
        include ('pays.php');
        include ('duree.php');
        include ('region.php');
        include ('parc.php');
        include ('addition.php');
        include ('type.php');
        include ('categorie.php');
        include ('cottage.php');

        global $a, $c;

        //Instantiation
        $this->pays = new C_pays(); // instantiation pr le controlleur
        $this->duree = new C_duree();
        $this->region = new C_region();
        $this->parc = new C_parc();
        $this->addition = new C_addition();
        $this->type = new C_type();
        $this->categorie = new C_categorie();
        $this->cottage = new C_cottage();

        $data['offre'] = $this->offre->getFullList(); //execute la fonction avec les éléments de la req de getFullList
        $data['pays'] = $this->pays->lister(); //ce qu'il faudra faire + tard pr avoir toutes les infos, ne pas oublié d'inclure les ≠ modèle
        $data['duree'] = $this->duree->lister();
        $data['region'] = $this->region->lister();
        $data['parc'] = $this->parc->lister();
        $data['addition'] = $this->addition->lister();
        $data['type'] = $this->type->lister();
        $data['categorie'] = $this->categorie->lister();
        $data['cottage'] = $this->cottage->lister();
        // Refaire un voir cottage et pas voir offre -> enlever l'espace filtre et fair un find cottage by id et reprend les éléments pays, region... via une jointure à 9
        $html = $a . $c . '.php';

        return array('data' => $data, 'html' => $html);
    }

    function ajouter_filtre()
    {

        $getInfo = $this->offre->getInformations($_GET['categorie'], $_GET['id']);

        $_SESSION['filtreCourant'][$_GET['categorie']] = array('id' => $getInfo['id'],
            'titre' => $getInfo['titre'],
            'categorie' => $_GET['categorie']
        );
        header('Location: index.php');
        //die('Impossible d\'ajouter le filtre');
    }

    function supprimer_filtre()
    {
        if (!isset($_SESSION['filtreCourant']))
        {
            die('Impossible de supprimer le filtre');
            //header('Location: error.php');
        }

        unset($_SESSION['filtreCourant'][$_GET['categorie']]);

        //header('Location: index.php');
        die('Impossible de supprimer le filtre');
    }

    function _reqConstruct()
    {
        $req = 'SELECT DISTINCT offres.*, cottages.*,
		EXTRACT(DAY FROM offres.date_debut) AS jourDebut,
		EXTRACT(MONTH FROM offres.date_debut) AS moisDebut,
		EXTRACT(YEAR FROM offres.date_debut) AS anneeDebut,
		EXTRACT(DAY FROM offres.date_fin) AS jourFin,
		EXTRACT(MONTH FROM offres.date_fin) AS moisFin,
		EXTRACT(YEAR FROM offres.date_fin) AS anneeFin
		FROM offres JOIN cottages ON offres.cottage_id = cottages.cottage_id';

        if (isset($_SESSION['filtreCourant']['type']))
        {
            $req .= ' JOIN types ON cottages.type_id = ' . $_SESSION['filtreCourant']['type']['id'];
        }
        else
        {
            $req .= ' JOIN types ON types.type_id = cottages.type_id';
        }

        if (isset($_SESSION['filtreCourant']['categorie']))
        {
            $req .= ' JOIN categories ON cottages.categorie_id = ' . $_SESSION['filtreCourant']['categorie']['id'];
        }
        else
        {
            $req .= ' JOIN categories ON categories.categorie_id = cottages.categorie_id';
        }

        if (isset($_SESSION['filtreCourant']['parc']))
        {
            $req .= ' JOIN parcs ON cottages.parc_id = ' . $_SESSION['filtreCourant']['parc']['id'];
        }
        else
        {
            $req .= ' JOIN parcs ON parcs.parc_id = cottages.parc_id';
        }

        if (isset($_SESSION['filtreCourant']['region']))
        {
            $req .= ' JOIN regions ON parcs.region_id = ' . $_SESSION['filtreCourant']['region']['id'];
        }
        else
        {
            $req .= ' JOIN regions ON parcs.region_id = regions.region_id';
        }

        if (isset($_SESSION['filtreCourant']['pays']))
        {
            $req .= ' JOIN pays ON regions.pays_id = ' . $_SESSION['filtreCourant']['pays']['id'];
        }
        else
        {
            $req .= ' JOIN pays ON regions.pays_id = pays.pays_id';
        }

        return $req;
    }
}

