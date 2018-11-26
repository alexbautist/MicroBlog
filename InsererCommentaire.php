<?php


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "micro_blog";
$comment= $_POST['contenu'];
      
        echo  var_dump($comment);
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);   
        $stmt = ("insert into messages (contenu) values ('$comment')");   
        $conn->exec($stmt);
       
        echo '<p> New record created successfully</p>';  