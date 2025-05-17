<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/../../');
$dotenv->load();

$dbHost = getenv('DB_HOST');
$dbPort = getenv('DB_PORT');
$dbDatabase = getenv('DB_DATABASE');
$dbUser = getenv('DB_USERNAME');
$dbPass = getenv('DB_PASSWORD');

if (!$dbHost || !$dbDatabase || !$dbUser || !$dbPass) {
    die("Error: Faltan variables de entorno necesarias para la conexión a la base de datos.");
}

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbDatabase);
if (!$conn) {
    die("Failed connection: ". mysqli_connect_error());
}

?>