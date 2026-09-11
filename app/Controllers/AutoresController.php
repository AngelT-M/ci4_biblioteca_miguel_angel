<?php
namespace App\Controllers;
use App\Models\AutoresModel;

class AutoresController extends BaseController
{
    public function mostrarDatos()
    {
        $modelo = new AutoresModel();
        return view('autores', ['datos' => $modelo->findAll()]);
    }

    public function guardar()
    {
        $modelo = new AutoresModel();
        $modelo->insert([
            'codigo_autor' => $this->request->getVar('txt_codigo'),
            'apellido' => $this->request->getVar('txt_apellido'),
            'nombre' => $this->request->getVar('txt_nombre'),
            'nacionalidad' => $this->request->getVar('txt_nacionalidad')
        ]);
        return $this->mostrarDatos();
    }

    public function buscar($codigo)
    {
        $modelo = new AutoresModel();
        return view('actualizarAutor', ['datos' => $modelo->find($codigo)]);
    }

    public function actualizar()
    {
        $modelo = new AutoresModel();
        $codigo = $this->request->getVar('txt_codigo');
        $modelo->update($codigo, [
            'apellido' => $this->request->getVar('txt_apellido'),
            'nombre' => $this->request->getVar('txt_nombre'),
            'nacionalidad' => $this->request->getVar('txt_nacionalidad')
        ]);
        return $this->mostrarDatos();
    }

    public function eliminar($codigo)
    {
        $modelo = new AutoresModel();
        $modelo->delete($codigo);
        return $this->mostrarDatos();
    }
}
