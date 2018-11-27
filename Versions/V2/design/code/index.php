<?php require("../../backend/includes/control-session.php") ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrainement</title>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/training.css">
    <link rel=stylesheet href="css/navbar.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid" id="mainBox">
    <div class="container-fluid header" id="headerBox">
        <div id="titleBox">
            <h1>Entrainements</h1>
        </div>
        <div id="line"></div>
    </div>

    <div class="container-fluid" id="contentBox">

        <?php

        include('../../backend/includes/connexion_bdd.php'); //on se connect a la base et on envoie la requete

        $reponse = $bdd->query("SELECT NOMARC,POIDSARC, TAILLEARC, PWRARC, TYPEARC, PHOTOARC FROM arc WHERE ID_USER= '$idUser'");
        $n = 1;
        // On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch()) {


            ?>
            <div class="container" id="e<?php echo '$n' ?>">

                <a href="#"><?php echo htmlentities($donnees['NOMARC']); ?></A> <strong> Poids de L'arc
                        :</Strong> <?php echo htmlentities($donnees['POIDSARC']); ?> <strong
                    >TAILLEARC </Strong> <?php echo htmlentities($donnees['TAILLEARC']); ?><br/>


            </div>


            <?php
            $n++;
        }

        $reponse->closeCursor(); // Termine le traitement de la requête

        ?>


    </div>

    <div class="container-fluid footer" id="footerBox">
        <div class="container" id="homeBox">
            <button id="homeBtn"><i class="far fa-list-alt fa-2x" style="color: rgba(0, 0, 0, 0.9)"></i></button>
            <button id="homeBtn2"><i class="far fa-list-alt fa-lg" style="color: rgba(0, 0, 0, 0.9)"></i></button>
            <button id="homeBtn3"><i class="far fa-list-alt fa-3x" style="color: rgba(0, 0, 0, 0.9)"></i></button>
        </div>
        <div class="container" id="statsBox">
            <button id="statsBtn"><i class="fas fa-chart-line fa-2x" style="color: rgba(0, 0, 0, 0.9)"></i></button>
            <button id="statsBtn2"><i class="fas fa-chart-line fa-lg" style="color: rgba(0, 0, 0, 0.9)"></i></button>
            <button id="statsBtn3"><i class="fas fa-chart-line fa-3x" style="color: rgba(0, 0, 0, 0.9)"></i></button>
        </div>
        <div class="container" id="addBox">
            <button id="addBtn"><i class="fas fa-plus fa-2x" style="color: white"></i></button>
            <button id="addBtn2"><i class="fas fa-plus fa-lg" style="color: white"></i></button>
            <button id="addBtn3"><i class="fas fa-plus fa-3x" style="color: white"></i></button>
        </div>
        <div class="container" id="editBox">
            <button id="editBtn"><i class="far fa-edit fa-2x" style="color: rgba(0, 0, 0, 0.9)"></i></button>
            <button id="editBtn2"><i class="far fa-edit fa-lg" style="color: rgba(0, 0, 0, 0.9)"></i></button>
            <button id="editBtn3"><i class="far fa-edit fa-3x" style="color: rgba(0, 0, 0, 0.9)"></i></button>
        </div>
        <div class="container" id="accountBox">
            <button id="accountBtn"><i class="far fa-user fa-2x" style="color: rgba(0, 0, 0, 0.9)"></i></button>
            <button id="accountBtn2"><i class="far fa-user fa-lg" style="color: rgba(0, 0, 0, 0.9)"></i></button>
            <button id="accountBtn3"><i class="far fa-user fa-3x" style="color: rgba(0, 0, 0, 0.9)"></i></button>
        </div>
    </div>
</div>


</body>
</html>