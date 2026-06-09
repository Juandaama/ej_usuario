<?php
include("../DB/conexion.php");

$sql="SELECT*FROM producto";
$resul=$pdo->query($sql);
$productos=$resul->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <h1 class="derecha">Productos</h1>
    <a href="crearProducto.php" class="derecha" ><button class="flex">Crear producto</button></a><br>
    <table border=1>
        <tr>
            <td>Nombre</td>
            <td>codigo</td>
            <td>marca</td>
            <td>precio</td>
            <td>disponibilidad</td>
            <td>provedor</td>
            <td>rentabilidad</td>
            <td>Acciones</td>
        </tr>
        <?php foreach($productos as $u): ?>
            <tr>
            <td><?= $u['nombre'] ?></td>
            <td><?= $u['codigo'] ?></td>
            <td><?= $u['marca'] ?></td>
            <td><?= $u['precio'] ?></td>
            <td><?= $u['disponibilidad'] ?></td>
            <td><?= $u['provedor'] ?></td>
            <td><?= $u['rentabilidad'] ?></td>
            <td>
                <form action="actualizarProducto.php" method="post">
                    <input type="hidden" name="id" value="<?= $u['id'] ?>">
                    <input type="submit" value="Editar">
                </form>
                <form action="eliminarProducto.php" method="post">
                    <input type="hidden" name="id" value="<?= $u['id'] ?>">
                    <input type="submit" value="Eliminar">
                </form>
            </td>
            </tr>
        <?php endforeach; ?>
    </table><br>
    <a href="../index.php" class="derecha" ><button class="flex">Inicio</button></a><br>
</body>
</html>
