<?php

$GLOBALS ['validControllers'] = array(
    'offre' => 'offre'
);
$GLOBALS ['validActions'] = array(
    'lister' => 'lister',
    'voir' => 'voir',
    'ajouter_filtre' => 'ajouter_filtre',
    'supprimer_filtre' => 'supprimer_filtre'
);

$GLOBALS['getFiltre'] = array('pays' => 'pays',
    'duree' => 'durees',
    'region' => 'regions',
    'parc' => 'parcs',
    'type' => 'types',
    'addition' => 'additions'
);

define('DEFAULT_CONTROLLER', $validControllers ['offre']);
define('DEFAULT_ACTION', $validActions['lister']);

define('DSN', 'mysql:host=localhost;dbname=center_park');
define('USER', 'root');
define('PASS', 'root');

$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);