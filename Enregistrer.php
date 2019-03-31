<?php

// Connexion au base de données
require './inc/Connection.inc.php';

// Récupere les identifiants choisis par l'utilisateur
$mail= $_POST['mail'];
$mdp= $_POST['mdp'];

//Insertion des identifiants dans la base de données
$mdpH= password_hash($mdp,PASSWORD_DEFAULT);
$stmt = $conn->prepare("insert into utilisateur (mail, mdp) values ('$mail','$mdpH')");
$stmt->execute();

//Retour au formulaire pour se connecter
header('Location:FormulaireConnexion.php');
