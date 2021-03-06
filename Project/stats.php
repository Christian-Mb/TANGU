<?php
require_once 'controllers/functions/control-session.php';
require_once 'controllers/classes/ConnexionBDD.php';

$title = "Statistiques";?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?=$title?></title>

    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/stats.css">
    <link rel=stylesheet href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
</head>

<body>
<?php
$db = new ConnexionBDD();
$con = $db->getCon();
$query = "SELECT * FROM entrainement WHERE ID_USER = ? AND (PTS_TOTAL IS NOT NULL) AND (PCT_DIX IS NOT NULL) AND (PCT_NEUF IS NOT NULL) ORDER BY DATE_ENT DESC LIMIT 10";
$stmt = $con->prepare($query);
$stmt->execute([$idUser]);
$result = $stmt->fetchAll();
$js_result = json_encode($result);
?>
<?php include_once 'views/stats.view.php'?>
</body>
</html>