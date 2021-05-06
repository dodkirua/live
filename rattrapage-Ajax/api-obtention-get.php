<?php

$response = [
    'message' => 'Bonjour, ca gazouille',
    'user' => 'Doe John',
    'profile' => [
        'address' => "Quelque part das le sud !",
        'number' => 'fameux',
        'sex' => 'XD'
    ]
];

echo json_encode($response);

exit;