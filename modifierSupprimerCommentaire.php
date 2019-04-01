<?php

// Connexion au base de données
require './inc/Connection.inc.php';

//($_FILES[], $password)
// Condition pour determiner l'action à realiser. Si 'id' et 'a' existent, le message seré supprimé.
if (isset($_GET['id']) && isset($_GET['a'])) {
    $id = $_GET['id'];
    $action = $_GET['a'];
    $stmt = $conn->prepare("delete from messages where id='$id'");
    $stmt->execute();
    header("Location:index.php");
}

// Si 'a' n'existe pas, le message será inseré
else {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $conn->prepare("select contenu from messages where id= '$id'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $mes = $stmt->fetchAll();

        foreach ($mes as $k) {
            echo '<textarea id="message" name="message" class="form-control" > ' . $k['contenu'] . '</textarea>  
        <input type="hidden" name="id" id="idMessage" value=' . $id . '>';
        }
    } else {
        $comment = $_POST['contenu'];
        $stmt = ("insert into messages (contenu) values ('$comment')");
        $conn->exec($stmt);
        
        if(isset($_FILES["image"])){
        $image = $_FILES["image"]["name"];
        $tipo = $_FILES["image"]["type"];
        $size = $_FILES["imge"]["size"];
        $idImage= $conn->lastInsertId();
        $destino = $_SERVER["DOCUMENT_ROOT"] . '/img/';
        move_uploaded_file($_FILES["image"]["tmp_name"], $destino.$idImage.".jpg");
        header("Location:index.php");
        
        }        
    }
}



