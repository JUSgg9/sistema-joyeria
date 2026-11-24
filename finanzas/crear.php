<!DOCTYPE html>
<html>
<head>

<title>Registrar Finanzas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Registrar Movimiento Financiero</h2>

<form action="guardar.php" method="POST">

<div class="mb-3">
<label>Ingresos</label>
<input type="number" step="0.01" name="ingresos" class="form-control" required>
</div>

<div class="mb-3">
<label>Gastos</label>
<input type="number" step="0.01" name="gastos" class="form-control" required>
</div>

<button class="btn btn-success">
Guardar
</button>

</form>

</div>

</body>
</html>