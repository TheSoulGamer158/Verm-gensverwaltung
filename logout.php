<?php
session_start();
$_SESSION = array();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link href="css/main.css" rel="stylesheet">
    <script type="text/javascript" src="js/javascript.js"></script>
    <meta name="description" content="Projekt 6.Semester">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Maurice Saatmann">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="login-box">
    <h2>Sie haben sich erfolgreich ausgeloggt!</h2>

</div>
</body>
</html>
