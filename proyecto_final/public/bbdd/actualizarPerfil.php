<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();
include 'conn.php';

$message = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    // validar los datos del formulario
    $stmt = $conn->prepare("UPDATE USUARIOS SET NOMBRE = ?, APELLIDO = ?, CORREO = ? WHERE ID = ?");
    $stmt->bind_param("ssss", $nombre, $apellido, $email, $_SESSION['userId']);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location: http://localhost:8000/perfil");
    } else {
        $message = "Error al actualizar los datos del perfil";
    }

    $stmt->close();

    $_SESSION['error_message'] = $message;
    header("Location: http://localhost:8000/perfil");
}

?>