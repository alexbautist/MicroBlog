<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Micro_blog2";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$nCommentairesPage=5;

$premierCommentaire = ($_GET['page'] - 1) * $nCommentairesPage;

$sqlCommentaires = $conn->prepare("select * from messages limit ?,?");
$sqlCommentaires->bindParam(1, $premierCommentaire, PDO::PARAM_INT);
$sqlCommentaires->bindParam(2, $nCommentairesPage, PDO::PARAM_INT);
$sqlCommentaires->execute();
$sqlCommentaires->setFetchMode(PDO::FETCH_ASSOC);
$resultCommentaires = $sqlCommentaires->fetchAll();


foreach ($resultCommentaires as $k) {

    echo '<blockquote><p>' . $k['contenu'] . '</p>           
               <footer>
               <p id="votes"></p>
               <a href="#" class = "tn btn-success btn-lg" id="vote" onclick="voter()">Vote</button>
               <a href="Message.php?id=' . $k['id'] . '" class="btn-lg btn-success">Modifier</a>
               <a href="modifierMessage.php?a=sup&id=' . $k['id'] . '" class="btn-lg btn-success">Supprimer</a></footer>           
               </blockquote>';
}
 
 
  