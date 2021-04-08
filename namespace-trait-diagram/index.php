<?php

use Live\Entity\Implantation;
use Live\Entity\Student;
use Live\Manager\Student as StudentManager;

require_once "Entity/EntityTrait.php";

require_once "Entity/Implantation.php";
require_once "Entity/School.php";
require_once "Entity/Student.php";

require_once "Manager/Implantation.php";
require_once "Manager/School.php";
require_once "Manager/Student.php";


$student = new Student();
$student->hello();

$studentManager = new StudentManager();
$studentManager->hello();

$implantation = new Implantation();
echo $implantation->getName();