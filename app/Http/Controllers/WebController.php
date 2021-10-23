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

    public function registro_broker()
    {
        return view('registro.registro-broker');
    }

    public function registro_inquilino()
    {
        return view('registro.registro-inquilino');
    }

    public function registro_propietario()
    {
        return view('registro.registro-propietario');
    }

    public function invitacion_propietario($transaccion)
    {
        $transaccion_user = $transaccion;
        return view('invitaciones.invitacion-propietario', compact('transaccion_user'));
    }

    public function iniciar_sesion()
    {
        return view('login.login');
    }
}
