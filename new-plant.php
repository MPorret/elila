<!DOCTYPE html>
<html class="no-js " lang="fr" prefix="og: http://ogp.me/ns#">
<head>
    <title>Nouvelle plante - Elila</title>
    <link rel="stylesheet" href="style.css" />
    <meta charset="utf-8" />
    <link rel="icon" sizes="144x144" href="./images/favicon.png">
</head>
<body>
    <?php include("entete.php"); ?>
    <div class="container">
        <h2>Nouvelle plante</h2>
        <form method="post" action="cible_post.php" enctype="multipart/form-data">
            <div class="name">
                <div class="profilpict">
                    <input type="file" name="profil" style="position:absolute;font-size:24px;"/><br />
                    <img src="#" />
                </div>
                <h4><input type="text" name="name" class="sciname" placeholder="Nom scientifique"/></h4>
            </div>
            <article class="sun">
                <h5>Luminosité</h5>
                <article class="power">
                    <input type="checkbox" name="lumiere" id="intense" value="Lumière intense" /> <label for="intense">Lumière intense</label><br/>
                    <input type="checkbox" name="lumiere" id="tamises" value="Lumière tamises" /> <label for="tamises">Lumière tamisée</label>
                </article>
                <article class="ombre">
                    <input type="checkbox" name="ombre" id="direct" value="Lumière direct"/> <label for="direct">Lumière directe</label><br/>
                    <input type="checkbox" name="ombre" id="indirect" value="Lumière indirect"/> <label for="indirect">Lumière indirecte</label>
                </article>
            </article>
            <article class="water">
                <h5>Arrosage</h5>
                <article class="summer">En été/printemps :<br/>
                    <input type="radio" name="arrosagesummer" id="unsemaine" value="1 fois/semaine"><label for="unsemaine">1 fois/semaine</label><br/>
                    <input type="radio" name="arrosagesummer" id="deuxsemaines" value="1 fois toutes les 2 semaines"><label for="deuxsemaines">2 fois/mois</label><br/>
                    <input type="radio" name="arrosagesummer" id="unmois" value="1 fois/mois"><label for="unmois">1 fois/mois</label><br/>
                    <input type="radio" name="arrosagesummer" value="deuxmois" id="1 fois tous les 2 mois"><label for="deuxmois">1 fois tous les 2 mois</label>
                </article>
                <article class="winter"><label for="">En hiver/automne : <br/>
                    <input type="radio" name="arrosagewinter" value="1 fois/semaine" id="unsemaine2"><label for="unsemaine2">1 fois/semaine</label><br/>
                    <input type="radio" name="arrosagewinter" value="1 fois toutes les 2 semaines" id="deuxsemaines2"><label for="deuxsemaines2">2 fois/mois</label><br/>
                    <input type="radio" name="arrosagewinter" value="1 fois/semaine" id="unmois2"><label for="unmois2">1 fois/mois</label><br/>
                    <input type="radio" name="arrosagewinter" value="1 fois toutes les 2 mois" id="deuxmois2"><label for="deuxmois2">1 fois tous les 2 mois</label>
                </article>
            </article>
            <div class="other">
                <h5>Autres informations</h5>
                <article class="informations"><textarea name="other" rows="8" cols="70" style="font-size:24px;border: 0.25rem solid #02bcae;border-radius:1rem;" placeholder="Informations complémentaires"></textarea></article>
            </div>
            <input type="submit" value="Valider" />
        </form>  
    </div>
</body>