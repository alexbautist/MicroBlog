<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "micro_blog1";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$mail= $_POST['mail'];
$mdp= $_POST['mdp'];

$stmt = $conn->prepare("select id from utilisateur where mail= '$mail'");
$stmt->execute();
$result= $stmt->rowCount();
if($result>0){
    
}