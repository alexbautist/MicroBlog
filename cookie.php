<?php

    $mail='a@a.com';
    $mdp='alex';
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "micro_blog"; 
   
    
    
      $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
      $sql= "Select * from Utilisareur where mail= ''a@a.com";
      $stmt= $conn->prepare($sql);
      
      $stmt->execute();
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      foreach($result as $k=>$v) { 
      if ($mail== $k['email']){
          if($mdp==$k['mdp']){
              echo '<p>Conexion réussi</p>';
          }
      }
    
    }
   
    
    
  ?>