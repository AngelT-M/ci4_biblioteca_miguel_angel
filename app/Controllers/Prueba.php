<?php

namespace App\Controllers;

class Prueba extends BaseController
{
    public function hacer(): string
    {
        return view('ci4');
    }
}