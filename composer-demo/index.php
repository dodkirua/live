<?php

require 'vendor/autoload.php';

use Dodkirua\Composerdemo\Controller\HomeController;
use Dodkirua\Composerdemo\Controller\HomeControllerBis;

$controller = new HomeController();
$controller2 = new HomeControllerBis();
$controller->index();
$controller2->index();