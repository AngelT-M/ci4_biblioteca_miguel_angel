<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Libros</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     <nav class="navbar navbar-expand-lg bg-primary ">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="<?= base_url('/') ?>">Datos Biblioteca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="<?= base_url('/') ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('grados') ?>">Grados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('estudiante') ?>">Estudiantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="<?= base_url('prestamos') ?>">Prestamos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('empleados') ?>">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('libros') ?>">Libros</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="<?= base_url('estados') ?>">Estados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('autores') ?>">Autores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('editoriales') ?>">Editoriales</a>
                    </li>
                    
                </ul>
                
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <h1 class="my-3">Libros</h1>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#libroModal">Agregar libro</button>
        <div class="modal fade" id="libroModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-light">Agregar libro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('guardar_libro') ?>" method="post">
                            <label for="txt_codigo" class="form-label">Código</label>
                            <input type="number" name="txt_codigo" id="txt_codigo" class="form-control" required>
                            <label for="txt_autor" class="form-label">Código autor</label>
                            <input type="number" name="txt_autor" id="txt_autor" class="form-control">
                            <label for="txt_editorial" class="form-label">Código editorial</label>
                            <input type="number" name="txt_editorial" id="txt_editorial" class="form-control">
                            <label for="txt_titulo" class="form-label">Título</label>
                            <input type="text" name="txt_titulo" id="txt_titulo" class="form-control" required>
                            <label for="txt_paginas" class="form-label">Páginas</label>
                            <input type="number" name="txt_paginas" id="txt_paginas" class="form-control">
                            <label for="txt_tamanio" class="form-label">Tamaño</label>
                            <input type="text" name="txt_tamanio" id="txt_tamanio" class="form-control">
                            <label for="txt_precio" class="form-label">Precio</label>
                            <input type="number" name="txt_precio" id="txt_precio" class="form-control">
                            <label for="txt_estado" class="form-label">Estado</label>
                            <input type="number" name="txt_estado" id="txt_estado" class="form-control">
                            <label for="txt_edicion" class="form-label">Edición</label>
                            <input type="number" name="txt_edicion" id="txt_edicion" class="form-control">
                            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="table-responsive" style="max-height: 700px; overflow-y: auto;">
            <table class="table table-striped">
                <thead class="sticky-top table-primary">
                    <tr>
                        <th>Código</th>
                        <th>Autor</th>
                        <th>Editorial</th>
                        <th>Título</th>
                        <th>Numero de Paginas</th>
                        <th>Tamaño</th>
                        <th>Precio</th>
                        <th>Estado</th>
                        <th>Edicion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($datos as $libro): ?>
                    <tr>
                        <td><?= esc($libro['codigo_libro']) ?></td>
                        <td><?= esc($libro['codigo_autor']) ?></td>
                        <td><?= esc($libro['codigo_editorial']) ?></td>
                        <td><?= esc($libro['titulo']) ?></td>
                        <td><?= esc($libro['numero_paginas']) ?></td>
                        <td><?= esc($libro['tamanio']) ?></td>
                        <td><?= esc($libro['precio']) ?></td>
                        <td><?= esc($libro['estado']) ?></td>
                        <td><?= esc($libro['edicion']) ?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="<?= base_url('buscarLibro/' . $libro['codigo_libro']) ?>">Actualizar</a>
                            <a class="btn btn-danger btn-sm" href="<?= base_url('eliminarLibro/' . $libro['codigo_libro']) ?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
