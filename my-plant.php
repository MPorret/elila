<!DOCTYPE html>
<html class="no-js " lang="fr" prefix="og: http://ogp.me/ns#">
<head>
    <title>Ma plante - Elila</title>
    <link rel="stylesheet" href="style.css" />
    <meta charset="utf-8" />
    <link rel="icon" sizes="144x144" href="./images/favicon.png">
</head>
<body>
    <?php
        include("entete.php");

        $req = $bdd->prepare('SELECT * FROM plants WHERE id=?');
        $req->execute(array($_GET['number']));

        while ($myplant = $req->fetch())
        {
    ?>
    <div class="container">
        <h2>Ma plante</h2>
        <div class="name">
            <div class="profilpict"><img src="./images/aloe-vera-burm.jpg" /></div>
            <h4><?php echo $myplant['name'] ?></h4>
        </div>
        <article class="sun">
            <h5>Luminosité</h5>
            <article class="power"><?php echo $myplant['lumiere'] ?></article>
            <article class="ombre"><?php echo $myplant['ombre'] ?></article>
        </article>
        <article class="water">
            <h5>Arrosage</h5>
            <article class="summer"><img src="./images/summer.png" /><?php echo $myplant['arrosagesummer'] ?></article>
            <article class="winter"><img src="./images/winter.png" /><?php echo $myplant['arrosagewinter'] ?></article>
        </article>
        <div class="other">
            <h5>Autres informations</h5>
            <article class="informations"><?php echo $myplant['other'] ?></article>
        </div>        
    </div>
    <?php }
    $req->closeCursor();
    ?>
</body>