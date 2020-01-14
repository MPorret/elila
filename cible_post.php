<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=elila_bdd;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO plants (name, lumiere, ombre, arrosagesummer, arrosagewinter, other, profil) VALUES(?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['name'], $_POST['lumiere'], $_POST['ombre'], $_POST['arrosagesummer'], $_POST['arrosagewinter'], $_POST['other'], $_POST['profil']));

// Redirection du visiteur vers la page du minichat
header('Location: plants.php');
?>