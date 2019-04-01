<?php

require './inc/Connection.inc.php';

// Récupere l'informations à stocker du message
$comment = $_POST['contenu'];
$id = $_POST['id'];

// Requete pour stocker le commentaire
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE messages SET contenu=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$comment, $id]);

// Retour à l'index
header("index.php");



