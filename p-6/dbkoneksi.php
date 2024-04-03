<?php
//konfigurasi
$host = "localhost";
$dbname = "DBpuskesmas";
$user = "root";
$pass = "";

$dsn = "mysql:host=$host;dbname=$dbname";

//koneksiin 
$dbh = new PDO($dsn ,$user,$pass);



?>