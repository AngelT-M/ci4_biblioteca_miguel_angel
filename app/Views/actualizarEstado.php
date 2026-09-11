<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar estado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container container-sm">
        <h1 class="my-3">Actualizar estado</h1>
        <form action="<?= base_url('actualizar_estado') ?>" method="post">
        <label for="txt_codigo" class="form-label">Código</label>
        <input type="number" name="txt_codigo" id="txt_codigo" class="form-control" value="<?=$datos['codigo_estado'] ?>" readonly>
        <br>
        <label for="txt_nombre" class="form-label">Nombre</label>
        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?=$datos['nombre'] ?>">
        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?= base_url('estados') ?>" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</body>
</html>
