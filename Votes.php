<?php


// Connexion au base de données
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Micro_blog2";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Récupere l'IP de l'utilisateur actuel
$actuelleIp=$_SERVER['REMOTE_ADDR'];

// Requete pour vérifier obtenir le nombre de votes et la dernière IP qui a voté
$idVotes= $_POST['idVotes'];
$sql1=$conn->prepare("select * from messages where id=$idVotes");
$sql1->execute();
$sql1->setFetchMode(PDO::FETCH_ASSOC);
$votes=$sql1->fetchAll();
$votesAvant;
$dernierIp;
foreach ($votes as $k) {
    $votesAvant=$k['votes']+1;
    $dernierIp=$k['dernierIP'];
}
// Si l'IP a déjà voté ne peut plus voter 
if($dernierIp === $actuelleIp){
    echo "Error";
}

// Sinon le vote est enregistré
else{
    $sql2=$conn->prepare("update messages set votes=$votesAvant, dernierIP='$actuelleIp' where id=$idVotes");
    $sql2->execute();

    $sql3=$conn->prepare("select * from messages where id=$idVotes");
    $sql3->execute();
    $sql3->setFetchMode(PDO::FETCH_ASSOC);
    $votesActuels=$sql3->fetchAll();
    foreach ($votesActuels as $k) {
    echo $k['votes'];
}

}