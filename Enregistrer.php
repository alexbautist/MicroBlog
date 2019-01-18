<?php

// Connexion au base de données
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Micro_blog2";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Récupere les identifiants choisis par l'utilisateur
$mail= $_POST['mail'];
$mdp= $_POST['mdp'];

//Insertion des identifiants dans la base de données
$mdpH= password_hash($mdp,PASSWORD_DEFAULT);
$stmt = $conn->prepare("insert into utilisateur (mail, mdp) values ('$mail','$mdpH')");
$stmt->execute();

//Retour au formulaire pour se connecter
header('Location:Formulaire.php');
