<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Micro_blog2";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$idVotes= $_POST['idVotes'];
$sql1=$conn->prepare("select votes from messages where id=$idVotes");
$sql1->execute();
$sql1->setFetchMode(PDO::FETCH_ASSOC);
$votes=$sql1->fetchAll();
$votesAvant;
foreach ($votes as $k) {
$votesAvant=$k['votes']+1;
}

$sql2=$conn->prepare("update messages set votes=$votesAvant where id=$idVotes");
$sql2->execute();

$sql3=$conn->prepare("select votes from messages where id=$idVotes");
$sql3->execute();
$sql3->setFetchMode(PDO::FETCH_ASSOC);
$votesActuels=$sql3->fetchAll();
foreach ($votes as $k) {
echo $k['votes'];
}