<?php

namespace App\Controllers;
use App\Models\EmpleadosModel;

class EmpleadoController extends BaseController
{
    public function mostrarDatos()
    {
        /*Quiero a la vista los datos de los empleados */
        $empleados = new EmpleadosModel();
        $datos['datos'] = $empleados->findAll();
        return view('empleado',$datos);
    }

    public function guardar()
    {
        $empleados = new EmpleadosModel();
        /*Recibir los datos del formulario */
        $codigo = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $direccion= $this->request->getVar('txt_direccion');
        $email = $this->request->getVar('txt_correo');

        /*Trasladar los datos a un array para ejecutarlos con el metodo insert */
        $datos=[
            'codigo_empleado' =>$codigo,
            'nombre' =>$nombre,
            'apellido' =>$apellido,
            'direccion' =>$direccion,
            'email' =>$email
        ];
        $empleados->insert($datos);
        
        /*llamar metodo esxistente  */
        return $this->mostrarDatos();
    }

    public function buscar($codigo)
    {
        $empleados = new EmpleadosModel();
        $datos['datos'] = $empleados->where('codigo_empleado', $codigo)->first();
        return view('actualizarEmpleado', $datos);
    }

    public function actualizar()
    {
        $empleados = new EmpleadosModel();
        $codigo = $this->request->getVar('txt_codigo');
        $datos = [
            'nombre' => $this->request->getVar('txt_nombre'),
            'apellido' => $this->request->getVar('txt_apellido'),
            'direccion' => $this->request->getVar('txt_direccion'),
            'email' => $this->request->getVar('txt_correo')
        ];

        $empleados->update($codigo, $datos);
        return $this->mostrarDatos();
    }

    public function eliminar($codigo)
    {
        $empleados = new EmpleadosModel();
        $empleados->delete($codigo);
        return $this->mostrarDatos();
    }
}