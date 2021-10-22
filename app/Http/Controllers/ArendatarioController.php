<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArendatarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function datos_propietario($transaccion)
    {
        $transaccion_user = $transaccion;

        return view('arendatario.datos-propietario', compact('transaccion_user'));
    }

    public function datos_personales()
    {
        return view('arendatario.datos-personales');
    }
}
