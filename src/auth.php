<?php
require '../vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function createToken($userId) {
    $key = "your_secret_key"; // Usa una clave secreta segura
    $payload = [
        "iss" => "yourdomain.com", // Quien emite el token
        "aud" => "yourdomain.com", // Para quien es el token
        "iat" => time(),          // Cuándo se generó
        "exp" => time() + 3600,   // Tiempo de expiración (1 hora)
        "user_id" => $userId      // Datos personalizados
    ];

    $jwt = JWT::encode($payload, $key, 'HS256'); // Crear el token
    return $jwt;
}
