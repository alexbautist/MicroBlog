<?php

$q = intval($_GET['q']);

$servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "micro_blog";

        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
         
        $stmt = $conn->prepare("select * from messages");   
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        $mes = $stmt->fetchAll();
         
          foreach ($mes as $k){  
              
          echo '<blockquote><p>'.$k['contenu'].'</p>
               <footer> <a href="message.php?id='.$k['id'].'">Modifier</a>
               <a href="modifierMessage.php?a=sup&id='.$k['id'].'">Supprimer</a></footer>           
               </blockquote>';
       }
 
 
  