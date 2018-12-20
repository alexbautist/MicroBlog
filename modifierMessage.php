<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Micro_blog2";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


if(isset($_GET['id']) && isset($_GET['a'])){
     $id = $_GET['id'];
     $action = $_GET['a'];
     $stmt = $conn->prepare("delete from messages where id='$id'");
     $stmt->execute();
     header("Location:index.php");
    
}
else{
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
    }
    else{
        $comment= $_POST['contenu'];
        $stmt = ("insert into messages (contenu) values ('$comment')");   
        $conn->exec($stmt);
       
    }
} 



