<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <form action="prcesoCrearProducto.php" method="POST" class="derecha">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="codigo">Codigo:</label>
        <input type="text" id="codigo" name="codigo" required><br><br>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required><br><br>

        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" required><br><br>

        <label for="disponibilidad">Disponibilidad:</label>
        <input type="text" id="disponibilidad" name="disponibilidad" required><br><br>

        <label for="provedor">Provedor:</label>
        <input type="text" id="provedor" name="provedor" required><br><br>

        <label for="rentabilidad">Rentabilidad:</label>
        <input type="text" id="rentabilidad" name="rentabilidad" required><br><br>

        <button type="submit">Crear Usuario</button>
    </form>
</body>
</html>