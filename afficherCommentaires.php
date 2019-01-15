<?php

$q = intval($_GET['qd']);

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Micro_blog2";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$stmt = $conn->prepare("select * from messages");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$mes = $stmt->fetchAll();
foreach ($mes as $k) {

    echo '<blockquote><p>' . $k['contenu'] . '</p>           
               <footer>
               <p id="votes"></p>
               <a href="#" class = "tn btn-success btn-lg" id="vote" onclick="voter()">Vote</button>
               <a href="Message.php?id=' . $k['id'] . '" class="btn-lg btn-success">Modifier</a>
               <a href="modifierMessage.php?a=sup&id=' . $k['id'] . '" class="btn-lg btn-success">Supprimer</a></footer>           
               </blockquote>';
}
 
 
  