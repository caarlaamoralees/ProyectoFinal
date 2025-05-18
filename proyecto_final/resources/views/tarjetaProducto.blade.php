<?php
include 'bbdd/conn.php';

$stmt = $conn->prepare("SELECT * FROM PRODUCTOS WHERE ID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    http_response_code(404);
    die("Producto no encontrado");
}

$producto = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Producto</title>
    <link rel="stylesheet" href="/css/estilosProductoDetalle.css">
</head>

<body>
    <header>
        <nav>
            <a href="index.php">Volver al catálogo</a>
            <a href="carrito.php">Carrito</a>
        </nav>
    </header>

    <main>
        <h1><?php echo htmlspecialchars($producto['MARCA']); ?> - <?php echo htmlspecialchars($producto['MODELO']); ?></h1>
        <img src="<?php echo htmlspecialchars($producto['IMAGEN']); ?>" alt="Imagen del producto">
        <ul>
            <li><strong>Color:</strong> <?php echo htmlspecialchars($producto['COLOR']); ?></li>
            <li><strong>Peso:</strong> <?php echo htmlspecialchars($producto['PESO']); ?></li>
            <li><strong>Precio:</strong> <?php echo htmlspecialchars($producto['PRECIO']); ?> €</li>
            <li><strong>Descripción:</strong> <?php echo htmlspecialchars($producto['DESCRIPCION']); ?></li>
        </ul>
    </main>
    
    <!-- boton agregar al carrito -->
    <div class="boton-agregar">
        <form action="carrito.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($producto['ID']); ?>">
            <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($producto['MARCA'] . ' - ' . $producto['MODELO']); ?>">
            <input type="hidden" name="precio" value="<?php echo htmlspecialchars($producto['PRECIO']); ?>">
            <button type="submit">Agregar al carrito</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 - Página hecha por Carla Morales Jimenez</p>
    </footer>

</body>
</html>