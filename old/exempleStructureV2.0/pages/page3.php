<!-- Inclusion du headers se trouvant dans le fichier _partials/header.php -->
<?php
$title = "Title Page 2";
include $_SERVER['DOCUMENT_ROOT']."/pages/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT']."/pages/_partials/menu.php";
?>

<!-- Page Content -->
<main>
    <div id="app-root"></div>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT']."/pages/_partials/footer.php";