<?php

include("../DB/conexion.php");

if($_POST) {
  $sql = "INSERT INTO usuarios
  (nombre, email)
  VALUES (?, ?)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$_POST['nombre'],
                  $_POST['email']]);

    header("Location: ../index.php");
}
