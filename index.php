<?php include ("login.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylelogin.css" />
        <title>Practive Time</title>

    </head>

    <body>

<div class="session">
        <form action="/projet_sport_amelie/entrainement.php" method="post">
    <h3> Connecte toi ! </h3>
    <br>
        <div>
            <label for="pseudo">Your Pseudo :</label>
            <input type="text" id="pseudo" name="email">
        </div>
        <div>
            <label for="mot_de_passe">Pasword :</label>
            <input type="password" id="mdp" name="password">
        </div>
<br>
        <div class="boutons_valider">
            <br><input class="Valider"
       type="submit"
       value="Valider">
        </div>
        
<br>
</div>

</div>
    </form>
    </body>