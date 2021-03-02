<?php

require "./db/versionStatic.php";

$db = DB::getInstance();

$userRequest = "INSERT INTO user (email, username, password) VALUES ('test@example.com', 'moi', 'azerty')";

if ($db->exec($userRequest)){
    $userId = $db->lastInsertId();
    $articleRequest = "INSERT INTO article (titre, contenu, user_fk) VALUES ('Un titre', 'Un contenu', $userId)";
    $db->exec($articleRequest);
}