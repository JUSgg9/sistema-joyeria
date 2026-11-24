<?php

include("../config/conexion.php");

$cliente_id = $_POST['cliente_id'];
$producto_id = $_POST['producto_id'];
$cantidad = $_POST['cantidad'];

$fecha = date("Y-m-d");

$sql_producto = "SELECT precio FROM productos
WHERE id='$producto_id'";

$resultado = mysqli_query($conn,$sql_producto);

$producto = mysqli_fetch_assoc($resultado);

$total = $producto['precio'] * $cantidad;

$sql = "INSERT INTO pedidos
(cliente_id, fecha, total, estado)

VALUES

('$cliente_id','$fecha','$total','Pendiente')";

mysqli_query($conn,$sql);

header("Location:index.php");

?>