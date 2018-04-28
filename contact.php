<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spiegelschlag Fotografie</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Fancybox CSS -->
    <link href="jquery.fancybox.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/contactstyle.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <script src="bower_components/scrollreveal/dist/scrollreveal.min.js"></script>
</head>

<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">

    <!-- Navbar brand -->
    <a class="navbar-brand text-uppercase text-nav-pad" href="index.php">
        <img src="kamerabild/kamera-favicon-weiss.png" height="45" class="d-inline-block align-top" alt="">
    Spiegelschlag Fotografie</a>
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="gallery.php" class="nav-link text-uppercase no-caret">Galerie</a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link text-uppercase no-caret">Der Fotograf</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link text-uppercase no-caret">Kontakt</a>
            </li>
            <li class="nav-item">
                <a href="impressum.php" class="nav-link text-uppercase no-caret">Impressum</a>
            </li>
            
        </ul>
        <!-- Links -->



</nav>
<!--/.Navbar-->
<div class="wrapper">
<div class="container">
    <div class="contact-title">
        <h1>Kontakt</h1>
        <hr>
        <h2>info@spiegelschlag-fotografie.de</h2>
    </div>
    <div class="contact-form">
        <form id="contact-form" method="post" action="contact-form-handler.php">
        <input name="name" type="text" class="form-control" placeholder="Ihr Name" required>
        <br>
        <input name="email" type="email" class="form-control" placeholder="Ihre eMail" required>
        <br>
        <textarea name="message" class="form-control" row="4" cols="5"  placeholder="Ihre Nachricht"  required></textarea><br>

        <input type="submit" class="form-control submit" value="NACHRICHT SENDEN">
        </form>
    </div>

</div>
    </div>
    <div class="push"></div>
<?php
    require("footer.php");
?>