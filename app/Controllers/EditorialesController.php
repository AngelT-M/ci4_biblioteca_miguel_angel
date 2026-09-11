<?php

namespace App\Controllers;
use App\Models\EditorialesModel;

class EditorialesController extends BaseController
{
    public function mostrarDatos()
    {
        $modelo = new EditorialesModel();
        return view('editoriales', ['datos' => $modelo->findAll()]);
    }

    public function guardar()
    {
        $modelo = new EditorialesModel();
        $modelo->insert([
            'codigo_editorial' => $this->request->getVar('txt_codigo'),
            'nombre' => $this->request->getVar('txt_nombre'),
            'direccion' => $this->request->getVar('txt_direccion'),
            'telefono' => $this->request->getVar('txt_telefono'),
            'email' => $this->request->getVar('txt_email')
        ]);
        return $this->mostrarDatos();
    }

    public function buscar($codigo)
    {
        $modelo = new EditorialesModel();
        return view('actualizarEditorial', ['datos' => $modelo->find($codigo)]);
    }

    public function actualizar()
    {
        $modelo = new EditorialesModel();
        $codigo = $this->request->getVar('txt_codigo');
        $modelo->update($codigo, [
            'nombre' => $this->request->getVar('txt_nombre'),
            'direccion' => $this->request->getVar('txt_direccion'),
            'telefono' => $this->request->getVar('txt_telefono'),
            'email' => $this->request->getVar('txt_email')
        ]);
        return $this->mostrarDatos();
    }

    public function eliminar($codigo)
    {
        $modelo = new EditorialesModel();
        $modelo->delete($codigo);
        return $this->mostrarDatos();
    }
}
