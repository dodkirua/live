<?php
require "./classes/Utilisateur.php";
require "./classes/Admin.php";


//Utilisateur
$user = new Utilisateur("Deterre");
echo $user->getNom();
echo "<br>";
echo $user->generateCode();
echo "<br><br>";

//Admin
$admin1 =  new Admin("Doe");
/*echo $admin1->generateCode();
echo "<br><br>";

$admin->display();
echo "<br>";
echo $admin1->getNom();*/

$admin2 = new Admin('Jane');


echo Admin::getInstanceCount();