<!DOCTYPE html>
<html class="no-js " lang="fr" prefix="og: http://ogp.me/ns#">
<head>
    <title>Mes plants - Elila</title>
    <link rel="stylesheet" href="style.css" />
    <meta charset="utf-8" />
    <link rel="icon" sizes="144x144" href="./images/favicon.png">
</head>
<body>
    <?php include("entete.php"); ?>
    <div class="container">
        <h2>Mes plantes</h2>
        <?php
         $liste = $bdd->query('SELECT * FROM plants');

         while ($plants = $liste->fetch())
         {
        ?>
             <a href="my-plant.php?number=<?php echo $plants['id'] ?>"><article id="plants"><div class="trapezoidleft"><h3><?php echo $plants['name'] ?></h3><div></article></a>
        <?php
         }

         $liste->closeCursor();
        ?>
    </div>
</body>