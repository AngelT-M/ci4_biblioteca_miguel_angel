<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container container-sm">
        <h1 class="my-3">Actualizar libro</h1>
        <form action="<?= base_url('actualizar_libro') ?>" method="post">
            <label for="txt_codigo" class="form-label">Código</label>
            <input type="number" name="txt_codigo" id="txt_codigo" class="form-control" value="<?= $datos['codigo_libro'] ?>" readonly>
            <br>
            <label for="txt_autor" class="form-label">Código autor</label>
            <input type="number" name="txt_autor" id="txt_autor" class="form-control" value="<?= $datos['codigo_autor'] ?>">
            <br>
            <label for="txt_editorial" class="form-label">Código editorial</label>
            <input type="number" name="txt_editorial" id="txt_editorial" class="form-control" value="<?= $datos['codigo_editorial'] ?>">
            <br>
            <label for="txt_titulo" class="form-label">Título</label>
            <input type="text" name="txt_titulo" id="txt_titulo" class="form-control" value="<?= $datos['titulo'] ?>">
            <br>
            <label for="txt_paginas" class="form-label">Número de páginas</label>
            <input type="number" name="txt_paginas" id="txt_paginas" class="form-control" value="<?= $datos['numero_paginas'] ?>">
            <br>
            <label for="txt_tamanio" class="form-label">Tamaño</label>
            <input type="text" name="txt_tamanio" id="txt_tamanio" class="form-control" value="<?= $datos['tamanio'] ?>">
            <br>
            <label for="txt_precio" class="form-label">Precio</label>
            <input type="number" name="txt_precio" id="txt_precio" class="form-control" value="<?= $datos['precio'] ?>">
            <br>
            <label for="txt_estado" class="form-label">Estado</label>
            <input type="number" name="txt_estado" id="txt_estado" class="form-control" value="<?= $datos['estado'] ?>">
            <br>
            <label for="txt_edicion" class="form-label">Edición</label>
            <input type="number" name="txt_edicion" id="txt_edicion" class="form-control" value="<?= $datos['edicion'] ?>">
            <br>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= base_url('libros') ?>" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</body>
</html>
