<?php
require '../src/auth.php';
require '../src/validate.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'login') {
    $userId = 123; // Ejemplo de ID de usuario
    $token = createToken($userId);
    echo json_encode(["token" => $token]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['action'] === 'validate') {
    $headers = getallheaders();
    $authHeader = isset($headers['Authorization']) ? $headers['Authorization'] : null;

    if (!$authHeader) {
        echo json_encode(["error" => "Token no proporcionado"]);
        exit;
    }

    $jwt = str_replace('Bearer ', '', $authHeader); // Extraer el token
    $result = validateToken($jwt);
    echo json_encode($result);
    exit;
}

echo json_encode(["error" => "Acción no válida"]);
