<?php

namespace App\Controllers;
use App\Models\EstudianteModel;

class EstudianteController extends BaseController
{
    public function mostrarDatos()
    {
    $estudiante = new EstudianteModel();
    $datos['datos'] = $estudiante->findAll();
    return view('estudiante',$datos);
    }
    public function guardarEstudiante(){
        $estudiante = new EstudianteModel();

        $carne = $this->request->getVar('txt_carne');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $direccion = $this->request->getVar('txt_direccion');
        $telefono = $this->request->getVar('txt_telefono');
        $email = $this->request->getVar('txt_email');
        $fecha = $this->request->getVar('txt_fecha');
        $grado = $this->request->getVar('txt_grado');

        $datos=[
            'carne_alumno' =>$carne,
            'nombre' =>$nombre,
            'apellido' =>$apellido,
            'direccion' =>$direccion,
            'telefono' =>$telefono,
            'email' =>$email,
            'fechanacimiento' =>$fecha,
            'codigo_grado' =>$grado
        ];
        $estudiante->insert($datos);
        return $this->mostrarDatos();
    }
    public function eliminar($codigo){
        $estudiante = new EstudianteModel();
        $estudiante->delete($codigo);
        return $this->mostrarDatos();
    }

    public function buscar($codigo){
        $estudiante = new EstudianteModel();
        $datos['datos'] = $estudiante->where('carne_alumno',$codigo)->first();
        return view('actualizarEstudiante',$datos);
    }

    public function actualizar(){
        $estudiante = new EstudianteModel();

        $carne = $this->request->getVar('txt_carne');
        $datos = [
            'nombre' => $this->request->getVar('txt_nombre'),
            'apellido' => $this->request->getVar('txt_apellido'),
            'direccion' => $this->request->getVar('txt_direccion'),
            'telefono' => $this->request->getVar('txt_telefono'),
            'email' => $this->request->getVar('txt_email'),
            'fechanacimiento' => $this->request->getVar('txt_fecha'),
            'codigo_grado' => $this->request->getVar('txt_grado')
        ];

        $estudiante->update($carne, $datos);
        return $this->mostrarDatos();
    }

}