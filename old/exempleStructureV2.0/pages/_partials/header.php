<?php
$root = "/".basename($_SERVER['DOCUMENT_ROOT']);
$root = str_replace('//','/',$root);
include $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= $root; ?>/assets/css/light.css">
    <link rel="stylesheet" href="<?= $root; ?>/assets/css/style.css">
    <title><?= $title ?></title>
</head>
<body>

<?php
if (isset($_GET['e'])){
    displayMessage($_GET['e'],ERROR);
}
elseif (isset($_GET['s'])){
    displayMessage($_GET['s']);
}
?>