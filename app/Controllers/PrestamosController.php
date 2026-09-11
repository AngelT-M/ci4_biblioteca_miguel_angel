<?php

namespace App\Controllers;
use App\Models\PrestamosModel;

class PrestamosController extends BaseController
{
    public function mostrarDatos()
    {
        $modelo = new PrestamosModel();
        return view('prestamos', ['datos' => $modelo->findAll()]);
    }

    public function guardar()
    {
        $modelo = new PrestamosModel();
        $modelo->insert($this->datos());
        return $this->mostrarDatos();
    }

    public function buscar($codigo)
    {
        $modelo = new PrestamosModel();
        return view('actualizarPrestamo', ['datos' => $modelo->find($codigo)]);
    }

    public function actualizar()
    {
        $modelo = new PrestamosModel();
        $codigo = $this->request->getVar('txt_numero');
        $datos = $this->datos();
        unset($datos['numero_prestamo']);
        $modelo->update($codigo, $datos);
        return $this->mostrarDatos();
    }

    public function eliminar($codigo)
    {
        $modelo = new PrestamosModel();
        $modelo->delete($codigo);
        return $this->mostrarDatos();
    }

    private function datos(): array
    {
        return [
            'numero_prestamo' => $this->request->getVar('txt_numero'),
            'codigo_libro' => $this->request->getVar('txt_libro'),
            'carne_alumno' => $this->request->getVar('txt_carne'),
            'fecha_prestamo' => $this->request->getVar('txt_fecha_prestamo'),
            'fecha_devolucion' => $this->request->getVar('txt_fecha_devolucion'),
            'codigo_empleado' => $this->request->getVar('txt_empleado')
        ];
    }
}
