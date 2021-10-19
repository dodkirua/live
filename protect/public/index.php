<?php
require dirname(__FILE__) . '/../src/Controller/Controller.php';
require dirname(__FILE__) . '/../src/Controller/HomeController.php';

// php -S localhost:8080 -t public/
$controller = new HomeController();
$controller->index();