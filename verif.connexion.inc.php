<?php
if(isset($_COOKIE['sid'])){
   echo   '<a href="#">Bienvenue</a>'
        . '<a href="deconexxion.php">Deconnexion</a>';
}
else{
   echo '<a href="#">Connexion</a>';
}

