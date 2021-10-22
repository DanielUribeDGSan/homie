<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('home.home');
    }

    public function registro()
    {
        return view('registro.registro');
    }

    public function invitacion_propietario($transaccion)
    {
        $transaccion_user = $transaccion;
        return view('invitaciones.invitacion-propietario', compact('transaccion_user'));
    }
}
