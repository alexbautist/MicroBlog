<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Micro_blog2";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$mail= $_POST['mail'];
$mdp= $_POST['mdp'];
$mdpH= password_hash($mdp,PASSWORD_DEFAULT);
$stmt = $conn->prepare("insert into utilisateur (mail, mdp) values ('$mail','$mdpH')");
$stmt->execute();
header('Location:Formulaire.php');
