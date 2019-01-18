<?php 

// Déconnexion et retour a l'index.
setcookie("sid", $sid, time()-1);
header("Location:index.php");
