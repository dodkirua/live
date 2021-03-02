<?php
require "versionObjet.php";
require "versionStatic.php";
require "./class/Utilisateurs.php";
require "./class/Clients.php";
require "./classStatic/UtilisateursStatic.php";
require "./classStatic/ClientsStatic.php";

$database = new DB2 ("127.0.0.1","live",'dev','dev');
$link = $database->getInstance();

$utilisateurs = new Utilisateurs($link);
$client = new Clients($link);

$database2 = new DB();
$link2 = $database2->getInstance();

$utilisateursStatic = new UtilisateursStatic();
$clientStatic = new ClientsStatic();