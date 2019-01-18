<?php

// Connexion au base de données
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Micro_blog2";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Identifiants de l'utilisateur 
$mail= $_POST['mail'];
$mdp= $_POST['mdp'];

// Requete pour vérifier les identifiants de l'utilisateur
$stmt = $conn->prepare("select * from utilisateur where mail= '$mail'");
$stmt->execute();
$result= $stmt->rowCount();

// Condition pour vérifier si l'utilisateur existe
if($result>0){
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $res = $stmt->fetchAll();
 
    // Si l'utilisateur existe et le mot de passe est correcte: créer cookie
    foreach ($res as $k) {
         if(password_verify($mdp, $k['mdp'])){
           $sid= md5($mail.time());
           $sql = ("UPDATE utilisateur SET sid=? WHERE mail=?");  
           $stmt1= $conn->prepare($sql);
           $stmt1->execute([$sid, $mail]);
           setcookie("sid", $sid, time()+1800);
           header('Location:index.php');
           }
        }
     }
 
// Si l'utilisateur n'existe pas, retourne au formulaire 
else{
    header('Location:FormulaireConnexion.php');  
     }