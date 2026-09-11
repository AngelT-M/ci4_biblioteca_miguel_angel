<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>autores</title>
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
        <h1 class="my-3">Autores</h1>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#autorModal">Agregar autor</button>
        <div class="modal fade" id="autorModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-light">Agregar autor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('guardar_autor') ?>" method="post">
                            <label for="txt_codigo" class="form-label">Código</label>
                            <input type="number" name="txt_codigo" id="txt_codigo" class="form-control" required>
                            <label for="txt_apellido" class="form-label">Apellido</label>
                            <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" required>
                            <label for="txt_nombre" class="form-label">Nombre</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" required>
                            <label for="txt_nacionalidad" class="form-label">Nacionalidad</label>
                            <input type="text" name="txt_nacionalidad" id="txt_nacionalidad" class="form-control">
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
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>Nacionalidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $autor): ?>
                        <tr>
                            <td><?= esc($autor['codigo_autor']) ?></td>
                            <td><?= esc($autor['apellido']) ?></td>
                            <td><?= esc($autor['nombre']) ?></td>
                            <td><?= esc($autor['nacionalidad']) ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="<?= base_url('buscarAutor/' . $autor['codigo_autor']) ?>">Actualizar</a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url('eliminarAutor/' . $autor['codigo_autor']) ?>">Eliminar</a>
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
