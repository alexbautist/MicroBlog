<?php

if (isset($_COOKIE['sid'])) {
    echo '<a href="#">Bienvenue</a><a href="deconnexion.php">Deconnexion</a>';
} else {
    echo '<a href="./Formulaire.php">Connexion</a>';
}

