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


foreach ($resultCommentaires as $rC) {

    echo '<blockquote class="messages"><p>' . $rC['contenu'] . '</p>           
                
               <ul id="">
               <li class="options"><button name='.$rC['id'].' type="button" name="voter" class="btn btn-primary btnVoter" >Voter</button></li>
               <li class="options"><u name='.$rC['id'].'>'.$rC['votes'].'</u></li>
               <li class="options"><a href="Message.php?id=' . $rC['id'] . '" class="">Modifier</a></li>
               <li class="options"><a href="modifierMessage.php?a=sup&id=' . $rC['id'] . '" class="danger">Supprimer</a></li>
               <li class="options"></blockquote>';
}
 
 
  