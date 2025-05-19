<?php
include 'bbdd/registro.php';
// Verificación de registro de usuario, si hay un error se muestra el mensaje
$message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "";
unset($_SESSION['error_message']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <!-- estilos css -->
    <link rel="stylesheet" href="css/estilosRegistro.css">
</head>
<body>
    <header>
        <nav>
            <!-- botones a las paginas de inicio de sesion y registro -->
            <a href="{{ url('inicio') }}">Volver al inicio</a>
        </nav>
    </header>
    

    <!-- contenedor del formulario -->
    <main class="contenedor">
        <h1>Registro</h1>

        <!-- form de registro -->
        <form action="bbdd/registro.php" method="POST" class="formulario">

            <!-- nombre -->
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <!-- apellidos -->
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" required>

            <!-- correo -->
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email" required>

            <!-- contraseña -->
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena" required>

            <!-- fecha de nacimiento -->
            <label for="fecha">Fecha de nacimiento:</label>
            <input type="date" name="fecha" id="fecha" required>

            <!-- genero -->
            <label>Género:</label>
            <div class="genero">
                <label for="genero-m">
                    <input type="radio" name="genero" id="genero-m" value="M" required> Masculino
                </label>
                <label for="genero-f">
                    <input type="radio" name="genero" id="genero-f" value="F" required> Femenino
                </label>
            </div>

            <!-- mensaje de error si hubieran problemas -->
            <?php if ($message != "") : ?>
                <p class="mensaje-error"><?php echo htmlspecialchars($message); ?></p>
            <?php endif; ?>

            <!-- boton de envio -->
            <button type="submit">Registrarse</button>

            <a href="{{url('iniciar-sesion')}}" class="boton">Iniciar sesion</a>
        </form>
    </main>

</body>
</html>