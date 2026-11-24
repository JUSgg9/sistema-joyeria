<?php

session_start();

if(!isset($_SESSION['id'])){
    header("Location: login.php");
    exit();
}

include("config/conexion.php");

$productos = mysqli_num_rows(
    mysqli_query($conn, "SELECT * FROM productos")
);

$clientes = mysqli_num_rows(
    mysqli_query($conn, "SELECT * FROM clientes")
);

$pedidos = mysqli_num_rows(
    mysqli_query($conn, "SELECT * FROM pedidos")
);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sistema de Gestión de Joyería</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h1>
        Bienvenido <?php echo $_SESSION['nombre']; ?>
    </h1>

    <h3>Sistema de Gestión de Joyería</h3>

    <hr>

    <div class="row mb-4">

        <div class="col-md-4 mb-3">

            <div class="card bg-primary text-white shadow">

                <div class="card-body text-center">

                    <h1><?php echo $productos; ?></h1>

                    <h5>Productos</h5>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-3">

            <div class="card bg-success text-white shadow">

                <div class="card-body text-center">

                    <h1><?php echo $clientes; ?></h1>

                    <h5>Clientes</h5>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-3">

            <div class="card bg-warning shadow">

                <div class="card-body text-center">

                    <h1><?php echo $pedidos; ?></h1>

                    <h5>Pedidos</h5>

                </div>

            </div>

        </div>

    </div>

    <div class="mt-4">

        <a
        href="productos/index.php"
        class="btn btn-primary me-2 mb-2">
        Productos
        </a>

        <a
        href="clientes/index.php"
        class="btn btn-success me-2 mb-2">
        Clientes
        </a>

        <a
        href="pedidos/index.php"
        class="btn btn-warning me-2 mb-2">
        Pedidos
        </a>

        <a
        href="finanzas/index.php"
        class="btn btn-info me-2 mb-2">
        Finanzas
        </a>

        <a
        href="logout.php"
        class="btn btn-danger mb-2">
        Cerrar Sesión
        </a>

    </div>

</div>

</body>
</html>