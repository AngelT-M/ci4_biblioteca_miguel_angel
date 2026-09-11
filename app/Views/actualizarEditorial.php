<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar editorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container container-sm">
        <h1 class="my-3">Actualizar editorial</h1>
        <form action="<?= base_url('actualizar_editorial') ?>" method="post">
            <label for="txt_codigo" class="form-label">Código</label>
            <input type="number" name="txt_codigo" id="txt_codigo" class="form-control" value="<?= $datos['codigo_editorial'] ?>" readonly>
            <br>
            <label for="txt_nombre" class="form-label">Nombre</label>
            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?= $datos['nombre'] ?>">
            <br>
            <label for="txt_direccion" class="form-label">Dirección</label>
            <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" value="<?= $datos['direccion'] ?>">
            <br>
            <label for="txt_telefono" class="form-label">Teléfono</label>
            <input type="number" name="txt_telefono" id="txt_telefono" class="form-control" value="<?= $datos['telefono'] ?>">
            <br>
            <label for="txt_email" class="form-label">Email</label>
            <input type="email" name="txt_email" id="txt_email" class="form-control" value="<?= $datos['email'] ?>">
            <br>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= base_url('editoriales') ?>" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</body>
</html>
