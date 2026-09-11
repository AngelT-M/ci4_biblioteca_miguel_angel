<?php

namespace App\Controllers;
/*usar el modelo, el modelo es una clase que se concta con la tabla  */
use App\Models\EstadosModel;
class EstadosController extends BaseController
{
    public function mostrarDatos(): string
    {
        /*Crear un objeto de tipo EstadosModelo  */
        $estados = new EstadosModel();
        /*Buscar los datos y cargarlos  en el elemento php */
        $datos['datos']=$estados->findAll(); /*es como un select * from estados */

        return view('estados',$datos);
    }

    public function guardar()
    {
        $estados = new EstadosModel();
        $datos = [
            'codigo_estado' => $this->request->getVar('txt_codigo'),
            'nombre' => $this->request->getVar('txt_nombre')
        ];

        $estados->insert($datos);
        return $this->mostrarDatos();
    }

    public function buscar($codigo)
    {
        $estados = new EstadosModel();
        $datos['datos'] = $estados->where('codigo_estado', $codigo)->first();
        return view('actualizarEstado', $datos);
    }

    public function actualizar()
    {
        $estados = new EstadosModel();
        $codigo = $this->request->getVar('txt_codigo');
        $datos = ['nombre' => $this->request->getVar('txt_nombre')];

        $estados->update($codigo, $datos);
        return $this->mostrarDatos();
    }

    public function eliminar($codigo)
    {
        $estados = new EstadosModel();
        $estados->delete($codigo);
        return $this->mostrarDatos();
    }
}