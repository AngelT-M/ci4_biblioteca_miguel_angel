<?php

namespace App\Controllers;
use App\Models\GradosModel;

class GradosController extends BaseController 
{
    public function mostrarDatos()
    {
        $grado = new GradosModel();
        $datos['datos'] = $grado->findAll();
        return view('grados',$datos); 
    }

    public function guardar()
    {
        $grado = new GradosModel();

        $codigo = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');

        $datos=[
            'codigo_grado' =>$codigo,
            'nombre' =>$nombre
        ];

        $grado->insert($datos);

        return $this->mostrarDatos();
    }

    public function buscar($codigo)
    {
        $grado = new GradosModel();
        $datos['datos'] = $grado->where('codigo_grado', $codigo)->first();
        return view('actualizarGrado', $datos);
    }

    public function actualizar()
    {
        $grado = new GradosModel();
        $codigo = $this->request->getVar('txt_codigo');
        $datos = ['nombre' => $this->request->getVar('txt_nombre')];

        $grado->update($codigo, $datos);
        return $this->mostrarDatos();
    }

    public function eliminar($codigo)
    {
        $grado = new GradosModel();
        $grado->delete($codigo);
        return $this->mostrarDatos();
    }
}