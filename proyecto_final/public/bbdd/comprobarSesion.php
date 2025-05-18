<?php 

session_start();

// iniciar la sesion
if (!isset($_SESSION['userId'])) {
    // si la sesion esta activa redirigir a la pagina de inicio
    header("Location: http://localhost:8000/iniciar-sesion");
    exit();
};

?>