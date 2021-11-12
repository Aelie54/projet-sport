<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>Practive Time</title>
    </head>

    <body>


<div class="boutons">
    <input class="Mes entraînements"
       type="button"
       value="Add to favorites">

    <input class="Mon évolution"
       type="button"
       value="Add to favorites">
</div>


<div class="Exercices_choice">
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


<div class="afficher_exercice">
    <form for="/truc" method="post">
        <div>
            <label for="Kg">Poids :</label>
            <input type="number" step="0.01" id="poids" name="dateuser_name">
        </div>
        <div>
            <label for="Nombre entier">Nombre de levées :</label>
            <input type="number" id="levees" name="dateuser_name">
        </div>
        <div>
            <label for="Degrès">Pente :</label>
            <input type="number" id="pente" name="dateuser_name">
        </div>
        <div>
            <label for="Minutes">Durée :</label>
            <input type="entier" id="minutes" name="dateuser_name">
        </div>
        <div>
            <label for="Km/h">Vitesse :</label>
            <input type="number" step="0.01"  id="vitesse" name="dateuser_name">
        </div>
        <div>
            <label for="Nombre entier">Difficulté :</label>
            <input type="number" id="difficulte" name="dateuser_name">
        </div>
        <div>
            <label for="Oui ou Non">Active :</label>
            <SELECT>
            <OPTION>Non
            <OPTION>Oui
            </SELECT>
        </div>
</div>


    </body>
</html>