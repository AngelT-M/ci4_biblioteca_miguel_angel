<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <h1>Estudiante encontrado</h1>
    <div class="container container-sm">    
        <form action="<?= base_url('actualizar_estudiante') ?>" method="post" class="form" >
            <label for="txt_carne" class="form-label">Carne</label>
            <input type="number" name="txt_carne" id="txt_carne" class="form-control" min="1" required value="<?= $datos['carne_alumno'] ?>">
            <br>
            <label for="txt_nombre">Nombre</label>
            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?=$datos['nombre'] ?>">
            <br>
            <label for="txt_apellido" class="form-label">Apellido</label>
            <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" value="<?= $datos['apellido'] ?>">
            <br>
            <label for="txt_direccion" class="form-label">Direccion</label>
            <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" value="<?= $datos['direccion'] ?>">
            <br>
            <label for="txt_telefono" class="form-label">Telefono</label>
            <input type="number" name="txt_telefono" id="txt_telefono" class="form-control" value="<?= $datos['telefono'] ?>">
            <br>
            <label for="txt_email" class="form-label">Email</label>
            <input type="email" name="txt_email" id="txt_email" class="form-control" value="<?= $datos['email'] ?>">
            <br>
            <label for="txt_fecha" class="form-label">Fecha Nacimineto</label>
            <input type="date" name="txt_fecha" id="txt_fecha" class="form-control" value="<?= $datos['fechanacimiento'] ?>">
            <br>
            <label for="txt_grado" class="form-label">Condigo grado</label>
            <input type="number" name="txt_grado" id="txt_grado" class="form-control" value="<?= $datos['codigo_grado'] ?>">
            <br>
                <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>