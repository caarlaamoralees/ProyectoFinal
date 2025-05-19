<?php
//verificación de credenciales de inicio de sesión
include 'bbdd/iniciarSesion.php';

// mostrar mensaje de error si hay problemas al iniciar la sesion 
$message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "";
unset($_SESSION['error_message']); // elimina el mensaje después de mostrarlo
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <!-- estilos para el login -->
    <link rel="stylesheet" href="css/estilosinicioSesion.css">
</head>
<body>
    <header>
        <nav>
            <!-- botones a las paginas de inicio de sesion y registro -->
            <a href="{{ url('inicio') }}">Volver al inicio</a>
        </nav>
    </header>

    <main class="contenedor">
        <h1>Iniciar Sesión</h1>

        <!-- formulario de login -->
        <form action="bbdd/iniciarSesion.php" method="POST" class="formulario">
            <!-- correo de inicio del usuario -->
            <label for="correo">Correo:</label>
            <input type="email" name="correo" id="correo" required>

            <!--contraseña del usuario-->
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>

            <!-- boton de envio del el formulario -->
            <button type="submit">Iniciar sesión</button>
        </form>

        <a href="{{url('registro')}}" class="boton">Registrarse</a>

        <!-- mostrar un mensaje si hay un error con el inicio-->
        <?php if ($message): ?>
            <p class="mensaje-error"><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>
    </main>

</body>
</html>