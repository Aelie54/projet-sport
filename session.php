<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Practive Time</title>

    </head>

    <body>

    <br>
    <div class="text"> Psssssssst!!! Tu dois t'identifier ! </div>
    <br>

    <div class="session">

        <form action="/ma-page-de-traitement" method="post">
            <div>
                <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="dateuser_name">
            </div>
        <div>
            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" id="mdp" name="dateuser_name">
        </div>
</div>

<br>

<div class="boutons_valider">
    <input class="Valider"
       type="button"
       value="Valider">
</div>

    </form>
    </body>