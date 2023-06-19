<?php
ob_start();
	include_once "libs/Session.php";
	//Session::init();
	include_once "helpers/Format.php";
	spl_autoload_register(function($class){
	    include_once "classes/".$class.".php";
	  });

	$sm = new SampleClass();
	$su = new SampleUser();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>FestiDrive</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">


    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/monstyle.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Festi<span>Drive</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a href="index.php" class="nav-link">Accueil</a></li>
                    <li class="nav-item "><a href="about.php" class="nav-link">A propos</a></li>
                    <li class="nav-item"><a href="car.php" class="nav-link">Covoiturage</a></li>
                    <li class="nav-item"><a href="festival.php" class="nav-link">Festivals</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    <!-- si connecter il voit ceci -->
                    <li class="nav-item"><a href="reservation.php" class="nav-link">Mes réservations</a></li>
                    <li class="nav-item "><a href="profil.php" class="nav-link">Mon Profil</a></li>
                    <li class="nav-item">
                        <p class="d-flex mb-0 d-block connexion"><a href="connexion.php" class="log">Déconnexion</a></p>
                    </li>
                    <!-- sinon il voit le bouton -->
                    <li class="nav-item">
                        <p class="d-flex mb-0 d-block connexion"><a href="connexion.php" class="log">Connexion</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->