
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estudiante</title>
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
    <header>
        <h3>Estudiantes</h3>
    </header>
    <body>
        <div>
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#estudianteModal">
            Agregar Estudiante
            </button>
            <div class="modal fade" id="estudianteModal" tabindex="-1" aria-labelledby="estudianteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header  bg-primary ">
                            <h1 class="modal-title fs-5 text-light" id="estudianteModalLabel">Datos Estudiante</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('guardar_estudiante') ?>" method="post" class="form" >
                                <label for="txt_carne" class="form-label">Carne</label>
                                <input type="number" name="txt_carne" id="txt_carne" class="form-control" min="1" required>
                                <br>
                                <label for="txt_nombre">Nombre</label>
                                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" >
                                <br>
                                <label for="txt_apellido" class="form-label">Apellido</label>
                                <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">
                                <br>
                                <label for="txt_direccion" class="form-label">Direccion</label>
                                <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">
                                <br>
                                <label for="txt_telefono" class="form-label">Telefono</label>
                                <input type="number" name="txt_telefono" id="txt_telefono" class="form-control">
                                <br>
                                <label for="txt_email" class="form-label">Email</label>
                                <input type="email" name="txt_email" id="txt_email" class="form-control">
                                <br>
                                <label for="txt_fecha" class="form-label">Fecha Nacimineto</label>
                                <input type="date" name="txt_fecha" id="txt_fecha" class="form-control">
                                <br>
                                <label for="txt_grado" class="form-label">Condigo grado</label>
                                <input type="number" name="txt_grado" id="txt_grado" class="form-control">
                                <br>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="table-responsive" style="max-height: 700px; overflow-y: auto;">
            <table class=" table table-striped ">
                <thead class="sticky-top table-primary">
                    <tr>
                        <th>Carne</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Codigo grado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($datos as $estudiante):
                    ?>
                    <tr>
                        <td> <?=$estudiante['carne_alumno'];?> </td>
                        <td> <?=$estudiante['nombre'];?></td>
                        <td> <?=$estudiante['apellido'];?></td>
                        <td> <?=$estudiante['direccion'];?></td>
                        <td> <?=$estudiante['telefono'];?></td>
                        <td> <?=$estudiante['email'];?></td>
                        <td> <?=$estudiante['fechanacimiento'];?></td>
                        <td> <?=$estudiante['codigo_grado'];?></td>
                        <td>
                            <a href="<?= base_url('buscarEstu/'.$estudiante['carne_alumno'])?>" class="btn btn-primary">Actualizar</a>
                            <a href="<?= base_url('eliminarEstu/' . $estudiante['carne_alumno']); ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>

                </tbody>
            </table> 
        </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>