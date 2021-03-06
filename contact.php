<?php
session_start(); 
if(!isset($_SESSION["login"])){
    header("Location: formlogin.php");
    exit;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info_wisata</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

</head>

<body>
    <header id="header">
        <a href="#" class="logo"></i> NUANSA.CO</a>
        <ul>
            <li><a href="index.php"><i class="fa fa-fw fa-home"></i> HOME</a></li>
            <li><a href="desination.php"><i class="fa fa-fw fa-plane"></i> DESTINATION</a></li>
            <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i> CONTACT</a></li>
            <li><a href="formlogin.php"><i class="fas fa-sign-in-alt"></i> JOIN US</a></li>
        </ul>
        <div class="search">
            <input type="text" placeholder="Search.." name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-fw fa-search"></i></button>
        </div>
    </header>
<!--
    <div class="navbar">
        <a href="index.html"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="desination.html"><i class="fa fa-fw fa-search"></i> Desination</a>
        <a class="active" href="contact.html"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    </div>
-->
    <div>
        <img class="background" id="greenrectangle" src="image/greenrectangle.svg">
    </div>
    <div class='logo'>
        <img src="image/logo.png" id="Logo">
        <label id="nuansa"> Nuansa.co</label><br>
        <label id="info"> Informasi Wisata Jember </label>
    </div>
    <div class="container">
        <div class="icons">
            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="google"><i class="fab fa-google"></i></a>
        </div>
    </div>
</body>

</html>