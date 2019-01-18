<?php

if (isset($_COOKIE['sid'])) {
    echo '<li><a href="#">Bienvenue</a></li><li><a href="deconnexion.php">Deconnexion</a></li>';
} else {
    echo '<li><a href="./Formulaire.php">Connexion</a></li>';
}

