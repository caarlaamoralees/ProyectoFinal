<?php

session_start();

require_once 'conn.php';

$mensaje =  "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    // encriptar la contraseña
    $hased_password = password_hash($contrasena, PASSWORD_DEFAULT); 

    $fecha = $_POST['fecha'];
    $genero = $_POST['genero'];


    // validar los datos del formulario para que los emails no se repitan
    $checkEmailStmt = $conn->prepare("SELECT CORREO FROM USUARIOS WHERE CORREO = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailStmt->store_result();

    // insertar el nuevo usuario en la base de datos
    if ($checkEmailStmt->num_rows != 0) {
        $mensaje = "El email introducido ya esta registrado";
    } else {
        $stmt = $conn->prepare("INSERT INTO USUARIOS (NOMBRE, APELLIDO, CORREO, CONTRASENA, FECHA_NACIMIENTO, GENERO) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $nombre, $apellidos, $email, $hased_password, $fecha, $genero);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("Location: http://localhost:8000/");
            exit();
        } else {
            $mensaje = "Error al crear el usuario";
        }
    }

    $_SESSION["error_message"] = $mensaje;
    header("Location: http://localhost:8000/registro");

    
}


?>