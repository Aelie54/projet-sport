<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Practive Time</title>

    </head>


    <body>

<div class="boutons_nav">
    <input class="Mes_entraînements"
       type="button" onclick="window.location.href = 'mes_entrainements.php';"
       value="Mes entraînements">

    <input class="Mon_évolution"
       type="button" onclick="window.location.href = 'mon_evolution.php';"
       value="Mon évolution">
</div>

<br><br><br>

<div class="exercices_choice">
    <form action="/ma-page-de-traitement" method="post">
            <div>
                <label for="Date AAAA-MM-NN">Nom :</label>
                <input type="date" id="date" name="dateuser_name">
            </div>
        <SELECT for="selectionner exercice" name="exercise" size="1">
            <OPTION>Developpé couché
            <OPTION>Soulevé de terre
            <OPTION>Traction
            <OPTION>Soulevé militaire
            <OPTION>Squat
            <OPTION>Fente
            <OPTION>Corde traction triceps
            <OPTION>Tirage poitrine
            <OPTION>Extension lombaire
            <OPTION>Abdos sur banc : levé de jambes
            <OPTION>Abdos sur banc : levé de buste
            <OPTION>Tapis de course
            <OPTION>Vélo
            <OPTION>Monte marches
            <OPTION>Vélo élliptique
            <OPTION>Planche latérale gauche
            <OPTION>Planche latérale droite
            <OPTION>Planche face au sol sur coude
            <OPTION>Planche face au sol bras tendus
            <OPTION>Pont bras au sol
            <OPTION>Pont bras tendus
            </SELECT>
    </form>
</div>

<br>
<br>
<img class="image" src="https://www.sport-passion.fr/pictures/alteres.jpg" />
<br>
<br>

<div class="afficher_exercice">
    <form for="/truc" method="post">
        <div>
            <label for="Kg">Poids ajoutés :</label>
            <input type="number" step="0.25" id="poids" name="dateuser_name">
        </div>
        <div>
            <label for="Nombre entier">Nombre de levées :</label>
            <input type="number" id="levees" name="dateuser_name">
        </div>
        <div>
            <label for="Degrès">Pente ou inclinaison :</label>
            <input type="number" id="pente" name="dateuser_name">
        </div>
        <div>
            <label for="Minutes">Durée de l'exercice :</label>
            <input type="entier" id="minutes" name="dateuser_name">
        </div>
        <div>
            <label for="Km/h">Vitesse de l'exercice :</label>
            <input type="number" step="0.25"  id="vitesse" name="dateuser_name">
        </div>
        <div>
            <label for="Nombre entier">Difficulté choisie :</label>
            <input type="number" id="difficulte" name="dateuser_name">
        </div>
        <div>
            <label for="Nombre entier">Distance réalisée :</label>
            <input type="number" step="0.25" id="difficulte" name="dateuser_name">
        </div>
        <div>
            <label for="Nombre entier">Nombre de marches :</label>
            <input type="number" id="difficulte" name="dateuser_name">
        </div>
        <div>
            <label for="Oui ou Non">Active :</label>
            <SELECT>
            <OPTION>Non
            <OPTION>Oui
            </SELECT>
        </div>
    </form>
</div>

<br><br>

<div class="boutons_valider">
    <input class="Valider"
       type="button"
       value="Valider">
</div>

<!-- https://enacit.epfl.ch/cours/html/exercices/ex_boutons.html*/ 
     https://cssdeck.com/labs/css3-flexbox-flexible-box-layouts-flex-website -->

    </body>

</html>