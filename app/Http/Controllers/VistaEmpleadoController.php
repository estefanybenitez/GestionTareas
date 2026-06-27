<?php

namespace App\Http\Controllers\Empleados;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VistaEmpleadoController extends Controller
{
    //
    public function index()
    {
        return view('/empleados/InicioEmpleado');
    }

   
}
