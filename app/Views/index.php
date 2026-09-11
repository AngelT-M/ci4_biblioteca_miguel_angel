<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <header class="">
        
    </header>
    <nav class="navbar navbar-expand-lg bg-primary ">
        <div class="container-fluid  ">
            <a class="navbar-brand text-light " href="<?= base_url('/') ?>"> Datos Biblioteca</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

    <main class="container-fluid">
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>