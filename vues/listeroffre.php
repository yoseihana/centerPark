<div id="filtre">
    <h1>
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
                <a href="?c=<?php echo $GLOBALS['validControllers']['offre']; ?>&a=<?php echo $GLOBALS['validActions']['supprimer_filtre']; ?>&id=<?php echo($duree['duree_id']); ?>&categorie=duree"><?php echo $filtre; ?>
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
    </div>

</div>

<div class="offre">
    <?php if (count($view['data']['offre'])): ?>
    <table>
        <thead>
        <tr>
        <th>
            Parc
        </th>
        <th>
            Pays
        </th>
        <th>
            Région
        </th>
        <th>
            Durée
        </th>
        <th>
            Prix
        </th>
        </thead>
        <tbody>
            <?php foreach ($view['data']['offre'] as $offre): ?>
        <tr>
            <td>
                <?php echo $offre['cottage_id']; ?>
            </td>
            <td>
                <?php echo $offre['date_debut']; ?>
            </td>
            <td>
                <?php echo $offre['date_fin']; ?>
            </td>
            <td>
                <?php echo $offre['prix_normal']; ?>
            </td>
            <td>
                <?php echo $offre['prix_reduit']; ?>
            </td>
        </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <? else: ?>
    <p>
        Il n'y a aucune offre correspondant à vos critères
    </p>
    <?php endif; ?>
</div>