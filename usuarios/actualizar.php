<?php
include("../DB/conexion.php");

if (!isset($_POST['id']) || empty($_POST['id']) || !is_numeric($_POST['id'])) {
    die("ID de usuario no válido.");
}

$id = $_POST['id'];

$sql = "SELECT * FROM usuarios WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);


if (!$usuario) {
    die("Usuario no encontrado.");
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
    <form action="procesar_actualizacion.php" method="POST" class="derecha">
        <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" 
               value="<?= htmlspecialchars($usuario['nombre']) ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" 
               value="<?= htmlspecialchars($usuario['email']) ?>" required><br><br>

        <button type="submit">Actualizar Usuario</button>
    </form>
</body>
</html>