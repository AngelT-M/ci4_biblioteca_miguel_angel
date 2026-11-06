<?php

namespace App\Controllers;

class Micontrolador extends BaseController
{
    public function metodoInventado(): string 
    {
        echo"Hola";
        return view("pagina_mensaje");
    }
} 