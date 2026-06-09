<?php
include("../DB/conexion.php");

$sql="SELECT*FROM usuarios";
$resul=$pdo->query($sql);
$usuarios=$resul->fetchAll();

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
    <h1 class="derecha">Usuarios</h1>
    <a href="crear.php" class="flex"><button class="derecha">Crear usuario</button></a><br>
    <table border=1>
        <tr>
            <td>Nombre</td>
            <td>Correo</td>
            <td>Acciones</td>
        </tr>
        <?php foreach($usuarios as $u): ?>
            <tr>
            <td><?= $u['nombre'] ?></td>
            <td><?= $u['email'] ?></td>
            <td>
                <form action="actualizar.php" method="post">
                    <input type="hidden" name="id" value="<?= $u['id'] ?>">
                    <input type="submit" value="Editar">
                </form>
                <form action="eliminar.php" method="post">
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
