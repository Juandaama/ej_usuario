<?php

include("../DB/conexion.php");

if($_POST) {
  $sql = "INSERT INTO producto
  (nombre, codigo, marca, precio, disponibilidad, provedor, rentabilidad )
  VALUES (?,?,?,?,?,?,?)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$_POST['nombre'],
                  $_POST['codigo'],
                  $_POST['marca'],
                  $_POST['precio'],
                  $_POST['disponibilidad'],
                  $_POST['provedor'],
                  $_POST['rentabilidad']]);

    header("Location: ../index.php");
}
