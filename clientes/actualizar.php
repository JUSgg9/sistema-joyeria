<?php

include("../config/conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "UPDATE clientes SET

nombre='$nombre',
correo='$correo',
telefono='$telefono'

WHERE id='$id'";

mysqli_query($conn,$sql);

header("Location:index.php");

?>