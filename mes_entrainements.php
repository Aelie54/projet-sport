<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style2.css" />
        <title>Practive Time</title>

    </head>

    <body>

    <div class="entrainements_choix">

        <form action="/ma-page-de-traitement" method="post">
            <div>
                <label for="Date AAAA-MM-NN">Nom :</label>
                <input type="date" id="date" name="dateuser_name">
            </div>
        <SELECT for="selectionner une année" name="année" size="1">
            <OPTION>2021
            <OPTION>2022
        </SELECT>

        <SELECT for="selectionner un mois" name="année" size="1">
            <OPTION>Janvier
            <OPTION>Février
            <OPTION>Mars
            <OPTION>Avril
            <OPTION>Mai
            <OPTION>Juin
            <OPTION>Juillet
            <OPTION>Aout
            <OPTION>Septembre
            <OPTION>Octobre
            <OPTION>Novembre
            <OPTION>Décembre
        </SELECT>

        <SELECT for="selectionner un mois" name="année" size="1">
            <OPTION> vide
            <OPTION> vide
            <OPTION> vide
            <OPTION> vide
            <OPTION> vide
            <OPTION> vide
            <OPTION>
            <OPTION>
            <OPTION>
            <OPTION>
            <OPTION>
            <OPTION>
        </SELECT>
    </div>

    <div class="mon_entrainement"> 
    <input class="bouton_valider"
       type="button"
       value="Valider">
    </div>

</form>

    </body>