<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function datos_arendatario()
    {
        return view('propietario.datos-arendatario');
    }

    public function datos_personales()
    {
        return view('propietario.datos-personales');
    }
}
