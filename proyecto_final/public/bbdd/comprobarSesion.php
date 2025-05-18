<?php 

session_start();

if (!isset($_SESSION['userId'])) {
    // Si la sesión está activa, redirigir a la página de inicio
    header("Location: http://localhost:8000/iniciar-sesion");
    exit();
};

?>