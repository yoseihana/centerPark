<div id="filtre">
    <?php if (count($_SESSION['filtreCourant'])): ?>
    <div id="selection">
        <h1>
            Filtre(s)
        </h1>
        <ul>
            <?php foreach ($_SESSION['filtreCourant'] as $filtre): ?>
            <ul>
                <a href="?c=<?php echo $GLOBALS['validControllers']['offre']; ?>&a=<?php echo $GLOBALS['validActions']['lister']; ?>&categorie=<?php echo $filtre; ?>"><?php echo $filtre['titre']; ?></a>
            </ul>
            <?php endforeach; ?>
        </ul>

    </div>
    <?php endif; ?>
    <div id="critere">
        <?php if (count($view['data']['duree']) && !isset($_SESSION['filtreCourant']['duree'])) : ?>
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
        <?php //if (count($view['data']['region'])): ?>
        <?php if (count($view['data']['region']) && !isset($_SESSION['filtreCourant']['region'])) : ?>
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

        <?php //if (count($view['data']['pays'])): ?>
        <?php if (count($view['data']['pays']) && !isset($_SESSION['filtreCourant']['pays'])) : ?>
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
        <?php //if (count($view['data']['parc'])): ?>
        <?php if (count($view['data']['parc']) && !isset($_SESSION['filtreCourant']['parc'])) : ?>
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
        <?php //if (count($view['data']['addition'])): ?>
        <?php if (count($view['data']['addition']) && !isset($_SESSION['filtreCourant']['addition'])) : ?>
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
        <?php //if (count($view['data']['type'])): ?>
        <?php if (count($view['data']['type']) && !isset($_SESSION['filtreCourant']['type'])) : ?>
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
        <?php //if (count($view['data']['categorie'])): ?>
        <?php if (count($view['data']['categorie']) && !isset($_SESSION['filtreCourant']['categorie'])) : ?>
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
        Liste d'offres
    </h1>
    <?php if (count($view['data']['offre'])): ?>
    <table>
        <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Date début
            </th>
            <th>
                Date fin
            </th>
            <th>
                Prix normal
            </th>
            <th>
                Prix réduit
            </th>
            <th>
                Voir
            </th>
        </tr>
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
            <td>
                <a href="<?php echo VoirOffreUrl($offre['offre_id']) ?>">Voir l'offre</a>
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