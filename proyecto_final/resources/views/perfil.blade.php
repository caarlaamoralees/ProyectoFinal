<?php
include 'bbdd/conn.php';
include 'bbdd/comprobarSesion.php';

if (isset($_SESSION["userId"])) {
    $stmt = $conn->prepare("SELECT * FROM USUARIOS WHERE ID = ?");
    $stmt->bind_param("i", $_SESSION["userId"]);
    $stmt->execute();
    $result_user = $stmt->get_result();
    $user = $result_user->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
    <link rel="stylesheet" href="/css/estilosPerfil.css">
</head>
    <!-- encabezado -->
    <header>
        <nav>
            <!-- botones a las páginas de inicio de sesión y registro -->
            <a href="{{ url('inicio') }}">Volver al inicio</a>
            <a class="usuario" href="{{ url('perfil') }}"><?php echo $user["NOMBRE"]?></a>
        </nav>
    </header>

<body>

    <main>

        <div>
            <h1>Mi perfil</h1>
            <form action="bbdd/actualizarPerfil.php" method="POST">
                <input type="text" name="nombre" placeholder="nombre" value=<?php echo $user["NOMBRE"] ?> required>
                <br>
                <input type="text" name="apellido" placeholder="nombre" value=<?php echo $user["APELLIDO"] ?> required>
                <br>
                <input type="email" name="email" placeholder="email" value=<?php echo $user["CORREO"] ?> required>
                <br>
                <input type="submit" value="Actualizar datos"></input>
            </form>
            <a href="bbdd/cerrarSesion.php" class="cerrar-sesion">Cerrar sesión</a>
            <a href="bbdd/eliminarUsuario.php" class="cerrar-sesion">Eliminar Cuenta</a>
        </div>

    </main>

    <!-- footer -->
    <footer>
        <p>&copy; 2025 - Página hecha por Carla Morales Jimenez</p>
    </footer>
    
</body>
</html>