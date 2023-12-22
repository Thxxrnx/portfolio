<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thierno</title>
        <link rel="stylesheet" href="/styles.css">
        <script src="/script.js"></script>
        <script src="/smoothScroll.js"></script>
    </head>
    <body>
        <nav id="navbar">
            <a href="#" id="top-link" class="nav-link"><img src="./img/sunny-removebg-preview.png" alt=""></a>
            <ul>
                <li><a href="#site">Accueil</a></li>
                <li><a href="#a_propos">A propos</a></li>
                <li><a href="#competences">Competences</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#formation">Formation</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

<main>

<?php
require_once("bibli\YAML\yaml");
include("accueil.php")

?>

</main>