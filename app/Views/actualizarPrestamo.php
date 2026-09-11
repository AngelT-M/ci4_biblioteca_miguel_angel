<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar préstamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container container-sm">
        <h1 class="my-3">Actualizar préstamo</h1>
        <form action="<?= base_url('actualizar_prestamo') ?>" method="post">
            <label for="txt_numero" class="form-label">Número de préstamo</label>
            <input type="number" name="txt_numero" id="txt_numero" class="form-control" value="<?= $datos['numero_prestamo'] ?>" readonly>
            <br>
            <label for="txt_libro" class="form-label">Código de libro</label>
            <input type="number" name="txt_libro" id="txt_libro" class="form-control" value="<?= $datos['codigo_libro'] ?>">
            <br>
            <label for="txt_carne" class="form-label">Carné del alumno</label>
            <input type="number" name="txt_carne" id="txt_carne" class="form-control" value="<?= $datos['carne_alumno'] ?>">
            <br>
            <label for="txt_fecha_prestamo" class="form-label">Fecha de préstamo</label>
            <input type="date" name="txt_fecha_prestamo" id="txt_fecha_prestamo" class="form-control" value="<?= $datos['fecha_prestamo'] ?>">
            <br>
            <label for="txt_fecha_devolucion" class="form-label">Fecha de devolución</label>
            <input type="date" name="txt_fecha_devolucion" id="txt_fecha_devolucion" class="form-control" value="<?= $datos['fecha_devolucion'] ?>">
            <br>
            <label for="txt_empleado" class="form-label">Código de empleado</label>
            <input type="number" name="txt_empleado" id="txt_empleado" class="form-control" value="<?= $datos['codigo_empleado'] ?>">
            <br>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= base_url('prestamos') ?>" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</body>
</html>
