<?php
require "./class/User.php";
require "./class/Computer.php";
require "./class/Smartphone.php";
require "./class/SmartphoneAndroid.php";
require "./class/SmartphoneIOS.php";

$user = new User('John Doe','password tres fort');


$computerOne = new Computer('Lenovo','Linux');
$computerOne->setOwner($user);

$smartphone = new Smartphone("Huawei",'SmartphoneAndroid','Orange');
$smartphone->start();