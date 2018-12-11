<?php
require_once 'controllers/functions/control-session.php';
$title = "Nouvel Entrainement";?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?= $title?></title>

    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="">
    <link rel=stylesheet href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'views/add.view.php'?>
</body>
</html>


<?php

if(isset($_POST['creationEnt'])) {
    require_once ('');

    $ent1=new entrainement($_POST['nom'],$_POST['lieu'],$_POST['date'],$_POST['distance'],$_POST['arc'],$_POST['blason'],$_POST['SerieController'],$_POST['volee'],$_POST['fleche'],1);
}

?>