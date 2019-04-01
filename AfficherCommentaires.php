<?php
// Connexion au base de données
require './inc/Connection.inc.php';
// Nombre de commentaires para page 
$nCommentairesPage = 5;

// Premier commentaire à afficher dans chaque page
$premierCommentaire = ($_GET['page'] - 1) * $nCommentairesPage;

// Requete pour obtenir les commentaires correspondants à chaque page
$sqlCommentaires = $conn->prepare("select * from messages limit ?,?");
$sqlCommentaires->bindParam(1, $premierCommentaire, PDO::PARAM_INT);
$sqlCommentaires->bindParam(2, $nCommentairesPage, PDO::PARAM_INT);
$sqlCommentaires->execute();
$sqlCommentaires->setFetchMode(PDO::FETCH_ASSOC);
$resultCommentaires = $sqlCommentaires->fetchAll();


// Boucle pour aficher les commentaires  dans chaque 

foreach ($resultCommentaires as $rC) {
    $string= $rC['contenu'];
    preg_match_all('/@[a-zA-Z0-9_-]+/',$string, $output0);
    $replace0 = '<a href="">'.$output0[0][0].'</a>';
    $newString0= preg_replace('/'.$output0[0][0].'/', $replace0, $string);
//    preg_match_all('/(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/',$rC['contenu'], $output);
//    $replace = '<a href="">'.$output[0][0].'</a>';
//    $newString= preg_replace('/'.$output[0][0].'/', $replace, $newString0);
    
   
    $image = $_SERVER['DOCUMENT_ROOT'] . '/img/' . $rC['id'] . '.jpg';
    echo '<blockquote class="messages"><p>' . $newString0. '</p>';
    echo '<ul id="">
                     <li class="options"><button name=' . $rC['id'] . ' type="button" name="voter" class="btn btn-primary btnVoter" >Voter</button></li>
                     <li class="options"><u name=' . $rC['id'] . '>' . $rC['votes'] . '</u></li>
                     <li class="options"><a href="Message.php?id=' . $rC['id'] . '" class="">Modifier</a></li>
                     <li class="options"><a href="modifierSupprimerCommentaire.php?a=sup&id=' . $rC['id'] . '" class="danger">Supprimer</a></li>
                     <li class="options">'.$replace0.' <li>
</ul>
              </blockquote>';
    if (file_exists($image)) {
        echo '<img  src="inc/vignette.jpg.php?id=' . $rC["id"] . '" class="img-thumbnail" >';
    }
}
 
 
  