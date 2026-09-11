<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
    <header>
        <h1>Estados</h1>
    </header>
    

    <main>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#estadoModal">Agregar estado</button>
        <div class="modal fade" id="estadoModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-light">Agregar estado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                <div class="modal-body">
                    <form action="<?= base_url('guardar_estado') ?>" method="post">
                        <label for="txt_codigo" class="form-label">Código</label>
                        <input type="number" name="txt_codigo" id="txt_codigo" class="form-control" required>
                        <label for="txt_nombre" class="form-label">Estado</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" required>
                        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        
        <div class="table-responsive" style="max-height: 700px; overflow-y: auto;">
            <table class="table table-striped container container-sm">
                <thead class="sticky-top table-primary">
                    <tr>
                        <th>Codigo</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($datos as $estado) {
                    
                    ?>
                    <tr>
                        <td><?=$estado['codigo_estado']  ?></td>
                        <td><?=$estado['nombre'] ?></td>
                        <td>
                            <a href="<?= base_url('buscarEstado/' . $estado['codigo_estado']) ?>" class="btn btn-primary btn-sm">Actualizar</a>
                            <a href="<?= base_url('eliminarEstado/' . $estado['codigo_estado']) ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    </div>


       
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>