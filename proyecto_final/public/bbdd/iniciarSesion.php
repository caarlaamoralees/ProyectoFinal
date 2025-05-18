<?php 
session_start();
require 'conn.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // incluimos el nombre para guardarlo en la sesion
    $stmt = $conn->prepare("SELECT ID, NOMBRE, CONTRASENA FROM USUARIOS WHERE CORREO = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // comprobamos si la contraseña es correcta
        if (password_verify($password, $user['CONTRASENA'])) {
            $_SESSION["userId"] = $user["ID"];
            header("Location: http://localhost:8000/productos");
            exit();
        } else {
            $message = "Contraseña incorrecta";
        }
    } else {
        $message = "Email no registrado";
    }

    $stmt->close();
    $conn->close();

    // guardamos el mensaje de error para mostrar en la pagina de login
    $_SESSION['error_message'] = $message;
    header("Location: http://localhost:8000/iniciar-sesion");
}
?>