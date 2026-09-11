<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

//la ryta estados llama al metod mostrarDatos del controlador EstadosController 
$routes->get('estados','EstadosController::mostrarDatos');
$routes->post('guardar_estado', 'EstadosController::guardar');
$routes->get('buscarEstado/(:num)', 'EstadosController::buscar/$1');
$routes->post('actualizar_estado', 'EstadosController::actualizar');
$routes->get('eliminarEstado/(:num)', 'EstadosController::eliminar/$1');

$routes->get('empleados','EmpleadoController::mostrarDatos');
$routes->post('guardar_empleado','EmpleadoController::guardar');
$routes->get('buscarEmpleado/(:num)', 'EmpleadoController::buscar/$1');
$routes->post('actualizar_empleado', 'EmpleadoController::actualizar');
$routes->get('eliminarEmpleado/(:num)', 'EmpleadoController::eliminar/$1');

$routes->get('grados', 'GradosController::mostrarDatos');
$routes->post('guardar_grado','GradosController::guardar');
$routes->get('buscarGrado/(:num)', 'GradosController::buscar/$1');
$routes->post('actualizar_grado', 'GradosController::actualizar');
$routes->get('eliminarGrado/(:num)', 'GradosController::eliminar/$1');

$routes->get('estudiante','EstudianteController::mostrarDatos');
$routes->post('guardar_estudiante','EstudianteController::guardarEstudiante');
$routes->get('eliminarEstu/(:num)','EstudianteController::eliminar/$1');
$routes->get('buscarEstu/(:num)','EstudianteController::buscar/$1');
$routes->post('actualizar_estudiante', 'EstudianteController::actualizar');

$routes->get('autores', 'AutoresController::mostrarDatos');
$routes->post('guardar_autor', 'AutoresController::guardar');
$routes->get('buscarAutor/(:num)', 'AutoresController::buscar/$1');
$routes->post('actualizar_autor', 'AutoresController::actualizar');
$routes->get('eliminarAutor/(:num)', 'AutoresController::eliminar/$1');

$routes->get('editoriales', 'EditorialesController::mostrarDatos');
$routes->post('guardar_editorial', 'EditorialesController::guardar');
$routes->get('buscarEditorial/(:num)', 'EditorialesController::buscar/$1');
$routes->post('actualizar_editorial', 'EditorialesController::actualizar');
$routes->get('eliminarEditorial/(:num)', 'EditorialesController::eliminar/$1');

$routes->get('libros', 'LibrosController::mostrarDatos');
$routes->post('guardar_libro', 'LibrosController::guardar');
$routes->get('buscarLibro/(:num)', 'LibrosController::buscar/$1');
$routes->post('actualizar_libro', 'LibrosController::actualizar');
$routes->get('eliminarLibro/(:num)', 'LibrosController::eliminar/$1');

$routes->get('prestamos', 'PrestamosController::mostrarDatos');
$routes->post('guardar_prestamo', 'PrestamosController::guardar');
$routes->get('buscarPrestamo/(:num)', 'PrestamosController::buscar/$1');
$routes->post('actualizar_prestamo', 'PrestamosController::actualizar');
$routes->get('eliminarPrestamo/(:num)', 'PrestamosController::eliminar/$1');