<?php

// Le but de ce fichier est d'envoyer un hello à l'utilisateur
$payload = file_get_contents('php://input');
$payload = json_decode($payload, true);

// N'oubliez pas vos vérifs !!!!!!!!!! Ici on ne les fera pas !
$message = $payload['message'];
$user = $payload['user'];

// On envoie le résultat du traitement.
$response = [
    'resp' => 'Ma réponse est: D, la réponse D ' . $message . ' ' . $user
];

echo json_encode($response);
// Envoi éventuel d'un code de réponse.
http_response_code(201); // 201 = created mais peut aussi être 200 ou autre ou encore rien du tout.
exit;