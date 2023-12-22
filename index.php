<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thierno</title>
        <link rel="stylesheet" href="styles.css">
        <script src="js/script.js"></script>
        <script src="js/smoothScroll.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
require_once("bibli/yaml/yaml.php");
include("php/accueil.php");
include("php/a_propos.php");
include("php/competences.php");
include("php/experiences.php");
include("php/formations.php");
?>

<section id="contact">
    <?php 
    include("php/contact.php")
    ?>
    <div>
        <h1>Contactez-moi</h1>
    </div>
        <form id="contact-form" action="" method="post" data-sitekey="6Lf4szgpAAAAALsJOHlFlldsdwlyYaHCQHZ-frGI">
            <label for="Prenom">Prénom :</label>
            <input type="text" id="Prenom" name="Prenom" required>   
                    
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <div class="g-recaptcha" data-sitekey="6Lf4szgpAAAAALsJOHlFlldsdwlyYaHCQHZ-frGI"></div>
            <p id="error-message"><?php echo isset($errorMessage) ? $errorMessage : ''; ?></p>
            <input type="submit" value="Envoyer">
        </form>
    <div>
        <ul>
            <a href="https://www.linkedin.com/in/thierno-ba-9b8a95283/"><li>LinkedIn </li></a>
        </ul>
    </div>
</section>

</main>