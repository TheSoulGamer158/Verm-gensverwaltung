<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="css/main.css" rel="stylesheet">
    <script type="text/javascript" src="js/javascript.js"></script>
    <meta name="description" content="Projekt 6.Semester">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Maurice Saatmann">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>
<div class="login-box">
    <h2>Login</h2>
    <form id="form-login" action="index.php" method="POST">
        <div class="user-box">
            <input type="text" name="username" required="" id="username-field">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="" id="password-field">
            <label>Password</label>
        </div>
        <button type="submit" class="a">Einloggen</button>
    </form>
</div>
</body>
</html>
