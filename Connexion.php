<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "micro_blog1";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$mail= $_POST['mail'];
$mdp= $_POST['mdp'];

$stmt = $conn->prepare("select * from utilisateur where mail= '$mail'");
$stmt->execute();
$result= $stmt->rowCount();

if($result>0){
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $res = $stmt->fetchAll();
    foreach ($res as $k) {
    if(password_verify($mdp, $k['mdp'])){
        $sid= md5($mail.time());
        $sql = ("UPDATE utilisateur SET sid=? WHERE mail=?");  
        $stmt1= $conn->prepare($sql);
        $stmt1->execute([$sid, $mail]);
        setcookie("sid", $sid, time()+3600);
        
        header('Location:index.php');
    }
} }
else{
  header('Location:Formulaire.php');  
}