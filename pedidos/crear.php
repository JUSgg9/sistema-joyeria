<?php

include("../config/conexion.php");

$clientes = mysqli_query($conn,"SELECT * FROM clientes");
$productos = mysqli_query($conn,"SELECT * FROM productos");

?>

<!DOCTYPE html>
<html>
<head>

<title>Nuevo Pedido</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Registrar Pedido</h2>

<form action="guardar.php" method="POST">

<div class="mb-3">

<label>Cliente</label>

<select name="cliente_id" class="form-control">

<?php while($cliente=mysqli_fetch_assoc($clientes)){ ?>

<option value="<?php echo $cliente['id']; ?>">

<?php echo $cliente['nombre']; ?>

</option>

<?php } ?>

</select>

</div>

<div class="mb-3">

<label>Producto</label>

<select name="producto_id" class="form-control">

<?php while($producto=mysqli_fetch_assoc($productos)){ ?>

<option value="<?php echo $producto['id']; ?>">

<?php echo $producto['nombre']; ?>

</option>

<?php } ?>

</select>

</div>

<div class="mb-3">

<label>Cantidad</label>

<input
type="number"
name="cantidad"
class="form-control">

</div>

<button class="btn btn-success">

Guardar Pedido

</button>

</form>

</div>

</body>
</html>