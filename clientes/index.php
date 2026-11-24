<?php

session_start();

if(!isset($_SESSION['id'])){
    header("Location: ../login.php");
    exit();
}

include("../config/conexion.php");

$sql = "SELECT * FROM clientes";

$resultado = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Clientes</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Listado de Clientes</h2>

<a href="crear.php" class="btn btn-primary mb-3">

Nuevo Cliente

</a>

<table class="table table-bordered">

<tr>

<th>ID</th>
<th>Nombre</th>
<th>Correo</th>
<th>Teléfono</th>
<th>Editar</th>
<th>Eliminar</th>

</tr>

<?php while($fila=mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['correo']; ?></td>
<td><?php echo $fila['telefono']; ?></td>

<td>
<a href="editar.php?id=<?php echo $fila['id']; ?>"
class="btn btn-warning">
Editar
</a>
</td>

<td>
<a href="eliminar.php?id=<?php echo $fila['id']; ?>"
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