<?php
session_start();
if($_POST["username"] === "admin" and $_POST["password"] === "login") {
    $_SESSION["user"] = $_POST["username"];
}else{
    header("Location: login.php");
    echo "error";
}
?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Verm&ouml;gensverwaltung</title>
    <link href="css/main.css" rel="stylesheet">
    <script type="text/javascript" src="js/javascript.js"></script>
    <meta name="description" content="Projekt 6.Semester">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Maurice Saatmann">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class = "navbar" id="topNavbar">
    <a href="#Home">Home </a>
    <a href="#Tab1">Tab 1 </a>
    <a href="#Tab2">Tab 2 </a>
    <a href="logout.php" style="float: right">Ausloggen</a>
    <!--   <div class="navbar-right"><a href="#" class="exit">Exit</a></div> -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<div class="main">
    <div class="header">
        <h2>Herzlich willkommen Herr/Frau</h2>
    </div>
    <div class="cards">
        <div class="card left"><h2>Aktionen</h2><hr>
            <p>Vermögensanlage hinzufügen</p>
            <p>Vermögensanlage bearbeiten</p>
            <p>Vermögensanlage löschen</p>
        </div>
        <div class="card right"><h2>&Uuml;bersicht</h2><hr>
            <p>Vermögensanlage anzeigen</p>
            <p>Diagramme erzeugen</p>
            <p>Gesamtvermögen anzeigen</p>
        </div>
    </div>
</div>
</body>
</html>