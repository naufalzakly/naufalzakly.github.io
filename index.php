<?php
session_start(); 
if(!isset($_SESSION["login"])){
    header("Location: formlogin.php");
    exit;
}
require 'fuction.php';

?>


<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info_wisata</title>
    <link rel="stylesheet" href="home.css">
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
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> LOG OUT</a></li>



        </ul>
        <div class="search">
            <input type="text" placeholder="Search.." name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-fw fa-search"></i></button>
        </div>
    </header>
	<div>
		<img class="background" id="greencircle" src="image/Ellipse 1.svg">
		<img class="background" id="goldring" src="image/goldring.svg">
        <img class="background" id="goldshape" src="image/goldshape.svg">
		<img class="background" id="papumabg" src="image/papumabg.svg">
		<img class="background" id="papuma" src="image/papuma.svg">
    </div>
<!--
    <div class="navbar">
            <a class="active" href="index.html"><i class="fa fa-fw fa-home"></i> HOME</a>
      	    <a href="desination.html"><i class="fa fa-fw fa-envelope"></i> DESTINATION</a>
            <a href="contact.html"><i class="fa fa-fw fa-envelope"></i> CONTACT</a>
    </div>
-->
    
    <div class="explore">

        <label id="judul"> EXPLORE </label><br>
        <label id="judul"> JEMBER</label><br><br><br>
        <label id="line"> Pariwisata Jember menawarkan pengalaman</label><br>
        <label id="line"> wisata yang kaya bagi siapapun. Jadilah salah</label><br>
        <label id="line"> satu trabeler yang bergembira disana.</label><br>
        <label id="line"> Jika bingung harus memulai dari mana. mulai</label><br>
        <label id="line"> saja dari beberapa tempat wisata di jember yang tersaji.</label><br>
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