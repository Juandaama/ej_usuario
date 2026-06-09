<?php
include("../DB/conexion.php");

if (!isset($_POST['id']) || empty($_POST['id']) || !is_numeric($_POST['id'])) {
    die("ID de producto no válido.");
}

$id = $_POST['id'];

$sql = "SELECT * FROM producto WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$productos = $stmt->fetch(PDO::FETCH_ASSOC);


if (!$productos) {
    die("Producto no encontrado.");
}
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <form action="procesoActualizarProductos.php" method="POST" class="derecha">
        <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" 
               value="<?= htmlspecialchars($productos['nombre']) ?>" required><br><br>

        <label for="codigo">Codigo:</label>
        <input type="text" id="codigo" name="codigo" 
               value="<?= htmlspecialchars($productos['codigo']) ?>" required><br><br>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" 
               value="<?= htmlspecialchars($productos['marca']) ?>" required><br><br>

        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" 
               value="<?= htmlspecialchars($productos['precio']) ?>" required><br><br>
        
        <label for="disponibilidad">Disponibilidad:</label>
        <input type="text" id="disponibilidad" name="disponibilidad" 
               value="<?= htmlspecialchars($productos['disponibilidad']) ?>" required><br><br>

        <label for="provedor">Provedor:</label>
        <input type="text" id="provedor" name="provedor" 
               value="<?= htmlspecialchars($productos['provedor']) ?>" required><br><br>

        <label for="rentabilidad">Rentabilidad:</label>
        <input type="text" id="rentabilidad" name="rentabilidad" 
               value="<?= htmlspecialchars($productos['rentabilidad']) ?>" required><br><br>

        <button type="submit">Actualizar producto</button>
    </form>
</body>
</html>