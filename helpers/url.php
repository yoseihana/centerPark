<?php

function voirOffreUrl($offre_id)
{
    $params['a'] = $GLOBALS['validActions']['voir'];
    $params['c'] = $GLOBALS['validControllers']['offre'];
    $params['id'] = $offre_id;

    return $_SERVER['PHP_SELF'] . '?' . http_build_query($params);
}

function listerOffreUrl()
{
    $params['a'] = $GLOBALS['validActions']['lister'];
    $params['c'] = $GLOBALS['validControllers']['offre'];

    return $_SERVER['PHP_SELF'] . '?' . http_build_query($params);
}