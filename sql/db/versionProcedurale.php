<?php
$server = "127.0.0.1";
$db = "live";
$user = "dev";
$pass = "dev";

try {
    $bdd = new PDO ("mysql:host=$server;dbname=$db;charset=utf8", $user, $pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Nous sommes connectés à la base de donnés.";
}

catch (PDOException $e){
    echo $e->getMessage();
}