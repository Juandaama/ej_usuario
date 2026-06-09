<?php
include("../DB/conexion.php");

if (!isset($_POST['id']) || empty($_POST['id']) || !is_numeric($_POST['id'])) {
    die("ID de producto no válido.");
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];
$disponibilidad = $_POST['disponibilidad'];
$provedor = $_POST['provedor'];
$rentabilidad = $_POST['rentabilidad'];

$sql = "UPDATE producto SET nombre = ?, codigo = ?,marca = ?,precio = ?,disponibilidad = ?,
provedor = ?,rentabilidad = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nombre, $codigo, $marca, $precio, $disponibilidad, $provedor, $rentabilidad , $id]);

header("Location: listaProductos.php");
exit();
?>  