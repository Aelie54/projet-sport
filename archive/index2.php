<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">   
        <link rel="stylesheet" href="style2.css" />
        <script type="text/javascript" src="fonctions.js"></script>
        <title>Practive Time</title>

    </head>

    <body>

<!-- deux boutons du haut-->
<div class="boutons_nav">
    <br><br>
    <input class="Mes_entraînements"
       type="button" onclick="window.location.href = 'mes_entrainements.php';"
       value="Mes entraînements">
    <input class="Mon_évolution"
       type="button" onclick="window.location.href = 'mon_evolution.php';"
       value="Mon évolution">
    <br><br>
</div>

<br><br><br>

<!-- entrer date et choix exercice-->
<div class="exercices_choice">
    <form method="post" required>
        <div><br>
            <label for="Date AAAA-MM-NN">Nom :</label>
            <input:required type="date" id="date" name="dateuser_name">
        </div><br>

        <select for="selectionner exercice" name="select" id= "mychoice">
            <option value="selectionner_exercice">selectionner exercice</option>
            <!-- Index = 0 et Valeur = selectionner_exercice et Texte = selectionner exercice -->
            <option value="developpe_couche">Developpé couché</option>
            <option value="souleve_de_terre">Soulevé de terre</option>
            <option value="traction">Traction</option>
            <option value="souleve_militaire">Soulevé militaire</option>
            <option value="squat">Squat</option>
            <option value="fente">Fente</option>
            <option value="corde">Corde traction triceps</option>
            <option value="tirage">Tirage poitrine</option>
            <option value="lombaire">Extension lombaire</option>
            <option value="abdos_jambes">Abdos sur banc : levé de jambes</option>
            <option value="abdos_buste">Abdos sur banc : levé de buste</option>
            <option value="tapis">Tapis de course</option>
            <option value="velo">Vélo</option>
            <option value="escalier">Monte marches</option>
            <option value="velo_el">Vélo élliptique</option>
            <option value="plg">Planche latérale gauche</option>
            <option value="pld">Planche latérale droite</option>
            <option value="psc">Planche face au sol sur coude</option>
            <option value="psb">Planche face au sol bras tendus</option>
            <option value="pont_sol">Pont bras bras tendus</option>
            <option value="pont_bras">Pont bras tendus jambes pliées</option>
            <option value="pont_bras">Pont épaules au sol</option>
        </select><br><br>
        
        <button type="button" onclick="choose()" id="bouton_selection">Sélectionner</button>
    <br><br>
    </form>
</div>



<!-- afficher image exercice et champs apramètres à remplir-->
<div class="afficher_exercice" id="flexbox">

    <form for="paramètres" method="post">
        <div id="image"><br>
            <img  id="image2" src="https://www.sport-passion.fr/pictures/alteres.jpg" />
            <br></div>

        <div id="poids">
            <label for="Kg">Poids ajoutés :</label>
            <input type="number" step="0.25" id="poids" min="0" name="dateuser_name"> 
        </div>

        <div id="nombre">
            <label for="Nombre entier">Nombre de levées :</label>
            <input type="number" id="levees"  min="0" name="dateuser_name">
        </div>

        <div id="degrès">
            <label for="Degrès">Pente ou inclinaison :</label>
            <input type="number" id="pente" name="dateuser_name">
        </div>

        <div id="minutes">
            <label for="Minutes">Durée de l'exercice :</label>
            <input type="entier" id="minutes"  min="0" name="dateuser_name">
        </div>

        <div id="vitesse">
            <label for="Km/h">Vitesse de l'exercice :</label>
            <input type="number" step="0.25"  id="vitesse"  min="0" name="dateuser_name">
        </div>

        <div id="difficulte">
            <label for="Nombre entier">Difficulté choisie :</label>
            <input type="number" id="difficulte" min="0" name="dateuser_name">
        </div>

        <div id="distance">
            <label for="Nombre entier">Distance réalisée :</label>
            <input type="number" step="0.25" id="difficulte"  min="0" name="dateuser_name">
        </div>

        <div id="marches">
            <label for="Nombre entier">Nombre de marches :</label>
            <input type="number" id="difficulte"  min="0" name="dateuser_name">
        </div>

        <div id="active">
            <label for="Oui ou Non">Active :</label>
            <select>
            <option>Non</option>
            <option>Oui</option>
            </select>
        </div>

    </form>

    <br><br>

    <div class="bouton_valider" id="valider">
        <input class="Valider"
        type="button"
        value="Valider"
        id="valider">
    </div>
    <br>
</div>

<!-- https://enacit.epfl.ch/cours/html/exercices/ex_boutons.html*/ 
     https://cssdeck.com/labs/css3-flexbox-flexible-box-layouts-flex-website -->

    </body>

</html>

