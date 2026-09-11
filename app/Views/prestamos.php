<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Préstamos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"></head>
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
        <h1 class="my-3">Préstamos</h1>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#prestamoModal">Agregar préstamo</button>
                <div class="modal fade" id="prestamoModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header bg-primary ">
                            <h5 class="modal-title text-light ">Agregar préstamo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('guardar_prestamo') ?>" method="post">
                                <label for="txt_numero" class="form-label">Número de préstamo</label>
                                <input type="number" name="txt_numero" id="txt_numero" class="form-control" required>
                                <label for="txt_libro" class="form-label">Código de libro</label>
                                <input type="number" name="txt_libro" id="txt_libro" class="form-control">
                                <label for="txt_carne" class="form-label">Carné del alumno</label>
                                <input type="number" name="txt_carne" id="txt_carne" class="form-control">
                                <label for="txt_fecha_prestamo" class="form-label">Fecha de préstamo</label>
                                <input type="date" name="txt_fecha_prestamo" id="txt_fecha_prestamo" class="form-control">
                                <label for="txt_fecha_devolucion" class="form-label">Fecha de devolución</label>
                                <input type="date" name="txt_fecha_devolucion" id="txt_fecha_devolucion" class="form-control">
                                <label for="txt_empleado" class="form-label">Código de empleado</label>
                                <input type="number" name="txt_empleado" id="txt_empleado" class="form-control">
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
                        <th>Número</th>
                        <th>Libro</th>
                        <th>Alumno</th>
                        <th>Préstamo</th>
                        <th>Devolución</th>
                        <th>Empleado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($datos as $prestamo): ?>
                    <tr>
                        <td><?= esc($prestamo['numero_prestamo']) ?></td>
                        <td><?= esc($prestamo['codigo_libro']) ?></td>
                        <td><?= esc($prestamo['carne_alumno']) ?></td>
                        <td><?= esc($prestamo['fecha_prestamo']) ?></td>
                        <td><?= esc($prestamo['fecha_devolucion']) ?></td>
                        <td><?= esc($prestamo['codigo_empleado']) ?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="<?= base_url('buscarPrestamo/' . $prestamo['numero_prestamo']) ?>">Actualizar</a>
                            <a class="btn btn-danger btn-sm" href="<?= base_url('eliminarPrestamo/' . $prestamo['numero_prestamo']) ?>">Eliminar</a>
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
