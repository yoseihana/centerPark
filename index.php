<?php

session_start();

if (!isset($_SESSION['filtre_activer']))
{
    $_SESSION = array();
}

ini_set('display_errors', 1);

include ('./config/config.php');
include ('./helpers/url.php');

try
{
    $connex = new PDO(DSN, USER, PASS, $options);
    $connex->query('SET CHARACTER SET UTF8');
    $connex->query('SET NAMES UTF8');
}
catch (PDOException $e)
{
    die($e->getMessage());
    //header('Location: index.php?c=error&a=e_databse'); cible le controleur d'erreur et l'action e de base de donnée
}

//Routage
if (isset($_REQUEST['a']) && isset($_REQUEST['c'])) //récupère les paramètre dans l'url
{
    if (in_array($_REQUEST['a'], $validActions) && in_array($_REQUEST['c'], $validControllers))
    {
        $a = $_REQUEST['a'];
        $c = $_REQUEST['c'];
    } else
    {
        die('a et/ou c ne sont pas valides');
        //header('Location:index.php?c=error&a=e_404');
    }
}
else
{
    $a = DEFAULT_ACTION;
    $c = DEFAULT_CONTROLLER;
}

include('controlleurs/' . $c . '.php');

$nom_controlleur = 'C_' . $c; //Va rechercher la class C_type dans le fichier type.php du controlleur par ex, va rechercher dans le controlleur la class celon la $c (ex offre)
$controlleur = new $nom_controlleur();
$view = call_user_func(array($controlleur, $a)); // Appel la fct avec les arguments $controlleur(ex offre) et $a (ex lister), il va rechercher la fonction dans le controlleur celon les arguments

include ('./vues/layout.php');