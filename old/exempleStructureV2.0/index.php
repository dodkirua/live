<!-- Inclusion du headers se trouvant dans le fichier _partials/header.php -->
<?php
$title = "Mon super index";
include $_SERVER['DOCUMENT_ROOT'] . "/pages/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/pages/_partials/menu.php";
?>

<!-- Page Content -->
<main>
    <!-- Section 1 -->
    <section>
        Mon contenu en section 1
    </section>

    <!-- Section 2 -->
    <section>
        Mon contenu en section 2
    </section>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/pages/_partials/footer.php";