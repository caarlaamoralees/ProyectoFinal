 <?php
include 'bbdd/conn.php';
include 'bbdd/iniciarSesion.php';

// consulta a la base de datos para obtener todos los productos
$stmt = $conn->prepare("SELECT * FROM PRODUCTOS");
$stmt->execute();
$result = $stmt->get_result();

// si no hay resultados, se muestra un error
if ($result->num_rows === 0) {
    http_response_code(404);
    die("Producto no encontrado");
}

$stmt->close();


if (isset($_SESSION["userId"])) {
    $stmt_user = $conn->prepare("SELECT * FROM USUARIOS WHERE ID = ?");
    $stmt_user->bind_param("s", $_SESSION["userId"]);
    $stmt_user->execute();
    $result_user = $stmt_user->get_result();
    $user = $result_user->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <!-- estilos para la pagina principal -->
    <link rel="stylesheet" href="css/estilosProductos.css">
</head>

<body>
    <!-- encabezado -->
    <header>
        <nav>
            <!-- botones a las páginas de inicio de sesión y registro -->
            <a class="usuario" href="{{ url('perfil') }}"><?php echo $user["NOMBRE"]?></a>
            <a href="{{ route('productos.xml') }}" class="btn btn-primary">Descargar XML</a>
            <a href="{{ url('inicio') }}">Volver al inicio</a>
        </nav>
    </header>

    <!-- contenido de la pagina -->
    <main>
        <h1>Catálogo de Productos</h1>

        <!-- seccion con los productos -->
        <section class="productos">
            <!-- muestra los productos disponibles de la base de datos -->
            <?php while($row = $result->fetch_assoc()) : ?>
                <a class="producto">
                    <!-- fotos de los productos -->
                    <img src="<?php echo htmlspecialchars($row['IMAGEN']); ?>" alt="Imagen de <?php echo htmlspecialchars($row['MARCA']); ?>">
                    
                    <!-- informacion de los productos -->
                    <div class="info">
                        <h2><?php echo htmlspecialchars($row['MARCA']); ?> - <?php echo htmlspecialchars($row['MODELO']); ?></h2>
                        <p><strong>Color:</strong> <?php echo htmlspecialchars($row['COLOR']); ?></p>
                        <p><strong>Peso:</strong> <?php echo htmlspecialchars($row['PESO']); ?> </p>
                        <p><strong>Precio:</strong> <?php echo htmlspecialchars($row['PRECIO']); ?> €</p>
                        <p><strong>Descripcion:</strong> <?php echo htmlspecialchars($row['DESCRIPCION']); ?></p>
                    </div>
                </a>
            <?php endwhile; ?>
        </section>
    </main>

    <!-- footer -->
    <footer>
        <p>&copy; 2025 - Página hecha por Carla Morales Jimenez</p>
    </footer>

</body>
</html>