<?php
require '../vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function validateToken($jwt) {
    $key = "your_secret_key"; // Usa la misma clave secreta

    try {
        $decoded = JWT::decode($jwt, new Key($key, 'HS256')); // Decodificar el token
        return (array) $decoded; // Devuelve los datos si es válido
    } catch (Exception $e) {
        return ["error" => $e->getMessage()]; // Manejo de errores
    }
}
