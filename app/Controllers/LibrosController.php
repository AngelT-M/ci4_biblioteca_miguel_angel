<?php

namespace App\Controllers;
use App\Models\LibrosModel;

class LibrosController extends BaseController
{
    public function mostrarDatos()
    {
        $modelo = new LibrosModel();
        return view('libros', ['datos' => $modelo->findAll()]);
    }

    public function guardar()
    {
        $modelo = new LibrosModel();
        $modelo->insert($this->datos());
        return $this->mostrarDatos();
    }

    public function buscar($codigo)
    {
        $modelo = new LibrosModel();
        return view('actualizarLibro', ['datos' => $modelo->find($codigo)]);
    }

    public function actualizar()
    {
        $modelo = new LibrosModel();
        $codigo = $this->request->getVar('txt_codigo');
        $datos = $this->datos();
        unset($datos['codigo_libro']);
        $modelo->update($codigo, $datos);
        return $this->mostrarDatos();
    }

    public function eliminar($codigo)
    {
        $modelo = new LibrosModel();
        $modelo->delete($codigo);
        return $this->mostrarDatos();
    }

    private function datos(): array
    {
        return [
            'codigo_libro' => $this->request->getVar('txt_codigo'),
            'codigo_autor' => $this->request->getVar('txt_autor'),
            'codigo_editorial' => $this->request->getVar('txt_editorial'),
            'titulo' => $this->request->getVar('txt_titulo'),
            'numero_paginas' => $this->request->getVar('txt_paginas'),
            'tamanio' => $this->request->getVar('txt_tamanio'),
            'precio' => $this->request->getVar('txt_precio'),
            'estado' => $this->request->getVar('txt_estado'),
            'edicion' => $this->request->getVar('txt_edicion')
        ];
    }
}
