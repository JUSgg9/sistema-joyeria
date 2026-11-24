<?php

session_start();

if(!isset($_SESSION['id'])){
    header("Location: ../login.php");
    exit();
}

include("../config/conexion.php");

$sql = "SELECT * FROM finanzas";

$resultado = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Finanzas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Finanzas</h2>

<a href="crear.php"
class="btn btn-primary mb-3">

Nuevo Registro

</a>

<table class="table table-bordered">

<tr>

<th>ID</th>
<th>Fecha</th>
<th>Ingresos</th>
<th>Gastos</th>
<th>Balance</th>

</tr>

<?php while($fila=mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['fecha']; ?></td>
<td>$<?php echo $fila['ingresos']; ?></td>
<td>$<?php echo $fila['gastos']; ?></td>
<td>$<?php echo $fila['balance']; ?></td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>