<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=elila_bdd;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
<nav id="entete">
    <h1><a href="index.php">Elila</a></h1>
    <div class="burgermenu" id="open">
        <img src="./images/burger-menu.png" width="80px" height="80px"/>
        <ul id="menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="plants.php">Mes plantes</a></li>
            <li><a href="new-plant.php">Nouvelle plante</a></li>
            <li><a href="#">Calendrier</a></li>
        </ul>
    </div>
</nav>