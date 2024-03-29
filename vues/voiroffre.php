<div id="filtre">
    <h1 class="titreOffre">
        <?php echo $c;?>
    </h1>
    <?php print_r($_SESSION); ?>
    <?php if (count($_SESSION['filtre_activer'])): ?>
    <div id="selection">
        <h1>
            Filtre(s)
        </h1>
        <ul>
            <?php foreach ($_SESSION['filtre_activer'] as $filtre => $value): ?>
            <ul>
                <a href="?c=<?php echo $GLOBALS['validControllers']['offre']; ?>&a=<?php echo $GLOBALS['validActions']['supprimer_filtre']; ?>&id=<?php echo($filtre['duree_id']); ?>&categorie=duree"><?php echo $filtre; ?></a>
            </ul>
            <?php endforeach; ?>
        </ul>

    </div>
    <?php endif; ?>
    <div id="critere">
        <?php if (!is_null($view['data']['pays']) && count($view['data']['duree'])): ?>
        <h1>
            Durée
        </h1>
        <ul>
            <?php foreach ($view['data']['duree'] as $duree): ?>
            <li>
                <a href="?c=<?php echo $GLOBALS['validControllers']['offre']; ?>&a=<?php echo $GLOBALS['validActions']['ajouter_filtre']; ?>&id=<?php echo($duree['duree_id']); ?>&categorie=duree"><?php echo $duree['titre']; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <?php if (count($view['data']['region'])): ?>
        <h1>
            Région
        </h1>
        <ul>
            <?php foreach ($view['data']['region'] as $region): ?>
            <li>
                <a href="?c=<?php echo $GLOBALS['validControllers']['offre']; ?>&a=<?php echo $GLOBALS['validActions']['ajouter_filtre']; ?>&id=<?php echo($region['region_id']); ?>&categorie=region"><?php echo $region['titre']; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <?php if (count($view['data']['pays'])): ?>
        <h1>
            Pays
        </h1>
        <ul>
            <?php foreach ($view['data']['pays'] as $pays): ?>
            <li>
                <a href="?c=<?php echo $GLOBALS['validControllers']['offre']; ?>&a=<?php echo $GLOBALS['validActions']['ajouter_filtre']; ?>&id=<?php echo($pays['pays_id']); ?>&categorie=pays"> <?php echo $pays['titre']; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <? endif ?>
        <?php if (count($view['data']['parc'])): ?>
        <h1>
            Parc
        </h1>
        <ul>
            <?php foreach ($view['data']['parc'] as $parc): ?>
            <li>
                <a href="?c=<?php echo $GLOBALS['validControllers']['offre']; ?>&a=<?php echo $GLOBALS['validActions']['ajouter_filtre']; ?>&id=<?php echo($parc['parc_id']); ?>&categorie=parc"> <?php echo $parc['titre']; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif ?>
        <?php if (count($view['data']['addition'])): ?>
        <h1>
            Addition
        </h1>
        <ul>
            <?php foreach ($view['data']['addition'] as $addition): ?>
            <li>
                <a href="?c=<?php echo $GLOBALS['validControllers']['offre']; ?>&a=<?php echo $GLOBALS['validActions']['ajouter_filtre']; ?>&id=<?php echo($addition['addition_id']); ?>&categorie=addition"><?php echo $addition['titre']; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <?php if (count($view['data']['type'])): ?>
        <h1>
            Type
        </h1>
        <ul>
            <?php foreach ($view['data']['type'] as $type): ?>
            <li>
                <a href="?c=<?php echo $GLOBALS['validControllers']['offre']; ?>&a=<?php echo $GLOBALS['validActions']['ajouter_filtre']; ?>&id=<?php echo($type['type_id']); ?>&categorie=type"><?php echo $type['titre']; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <?php if (count($view['data']['type'])): ?>
        <h1>
            Catégorie
        </h1>
        <ul>
            <?php foreach ($view['data']['categorie'] as $categorie): ?>
            <li>
                <a href="?c=<?php echo $GLOBALS['validControllers']['offre']; ?>&a=<?php echo $GLOBALS['validActions']['ajouter_filtre']; ?>&id=<?php echo($categorie['categorie_id']); ?>&categorie=categorie"><?php echo $categorie['titre']; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>

</div>

<div class="offre">

    <h1>
        <?php echo $view['data']['offre'][0]['cottage_id']; ?> - <?php echo $view['data']['cottage'][0]['titre']; ?>
    </h1>

    <h2>
        Lieu
    </h2>

    <p>
        <?php echo $view['data']['pays'][0]['titre']; ?> - <?php echo $view['data']['region'][0]['titre']; ?> - <?php echo $view['data']['parc'][0]['titre']; ?>
    </p>

    <h2>
        Type
    </h2>

    <p>
        <?php echo $view['data']['categorie'][0]['titre']; ?> - <?php echo $view['data']['addition'][0]['titre']; ?> - <?php echo $view['data']['cottage'][0]['capacite']; ?> personnes - <?php echo $view['data']['duree'][0]['titre']; ?>
    </p>

    <div class="cottage">
        <?php echo $view['data']['cottage'][0]['apercu']; ?>
        <?php echo $view['data']['cottage'][0]['description']; ?>
    </div>
    <h2>
        Notre offre:
    </h2>

    <p>
        Offre pour le <?php echo $view['data']['offre'][0]['date_debut']; ?> au <?php echo $view['data']['offre'][0]['date_fin']; ?>
    </p>

    <p>
        Prix normal: <?php echo $view['data']['offre'][0]['prix_normal']; ?>. Prix réduit: <?php echo $view['data']['offre'][0]['prix_reduit']; ?>
    </p>

    <div class="retour">
        <a href="<?php echo listerOffreUrl(); ?>">Retour à la liste des offres</a>
    </div>
</div>