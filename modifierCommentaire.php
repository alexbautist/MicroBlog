<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "micro_blog1";
$comment= $_POST['contenu'];
$id= $_POST['id'];
    


        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);   
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE messages SET contenu=? WHERE id=?";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$comment, $id]);
        
   header("index.php");
      
        

