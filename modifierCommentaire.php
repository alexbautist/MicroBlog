<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Micro_blog2";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Récupere l'informations à stcocker du message
$comment = $_POST['contenu'];
$id = $_POST['id'];

// Requete pour stocker le commentaire
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE messages SET contenu=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$comment, $id]);

// Retour à l'index
header("index.php");



