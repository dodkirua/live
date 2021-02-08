<?php
require "./class/User.php";
require "./class/Computer.php";

$user = new User('John Doe','password tres fort');


$computerOne = new Computer('Apple','Intel','1Go','Linux','Vert Mathias');
$computerOne->setMouse(true);
$computerOne->setKeyboard(true);
$computerOne->start();
$computerOne->sleep();
$computerOne->shutdown();
echo "Memory : " . $computerOne->getMemory() . "<br>";
$computerOne->setOwner($user);

$computerTwo = new Computer('Huawei','Integrated','Amd ryzen','Zindozs','gris');
$computerTwo->setMouse(false);
$computerTwo->start();
$computerTwo->sleep();
$computerTwo->shutdown();
echo "Memory : " . $computerTwo->getMemory() . "<br>";
$computerTwo->setOwner($user);

echo $computerOne->getOwner();
echo $computerTwo->getOwner();