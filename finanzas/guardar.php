<?php

include("../config/conexion.php");

$ingresos = $_POST['ingresos'];
$gastos = $_POST['gastos'];

$balance = $ingresos - $gastos;

$fecha = date("Y-m-d");

$sql = "INSERT INTO finanzas
(fecha, ingresos, gastos, balance)

VALUES

('$fecha','$ingresos','$gastos','$balance')";

mysqli_query($conn,$sql);

header("Location:index.php");

?>