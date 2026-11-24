<?php

session_start();

if(!isset($_SESSION['id'])){
    header("Location: ../login.php");
    exit();
}

include("../config/conexion.php");

$sql = "SELECT pedidos.id,
clientes.nombre AS cliente,
pedidos.fecha,
pedidos.total,
pedidos.estado

FROM pedidos

INNER JOIN clientes
ON pedidos.cliente_id = clientes.id";

$resultado = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>

<html lang="es">

<head>

<meta charset="UTF-8">

<title>Pedidos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Listado de Pedidos</h2>

<a href="crear.php"
class="btn btn-primary mb-3">

Nuevo Pedido

</a>

<table class="table table-bordered">

<tr>

<th>ID</th>
<th>Cliente</th>
<th>Fecha</th>
<th>Total</th>
<th>Estado</th>
<th>Eliminar</th>

</tr>

<?php while($fila=mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['cliente']; ?></td>
<td><?php echo $fila['fecha']; ?></td>
<td>$<?php echo $fila['total']; ?></td>
<td><?php echo $fila['estado']; ?></td>

<td>

<a
href="eliminar.php?id=<?php echo $fila['id']; ?>"
class="btn btn-danger">

Eliminar

</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>