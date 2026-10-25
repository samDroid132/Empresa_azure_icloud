<?php
// Configuración de la base de datos MySQL
$host = getenv('DB_HOST') ?: 'localhost';
$dbname = 'tickets_azure_icloud_helpdesk';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASS') ?: '';

$conn = null;
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Modo seguro si la conexión local no está activa
}
?>