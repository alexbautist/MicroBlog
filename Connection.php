<?php

//class Connection {
//
//private $servername = "127.0.0.1";
//private $username = "root";
//private $password = "";
//private $dbname = "micro";
//private $conn;
//
//public function __construct() {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//}
//}

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "micro";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
