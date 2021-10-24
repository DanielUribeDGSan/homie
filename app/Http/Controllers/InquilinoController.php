<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InquilinoController extends Controller
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

    public function referencias()
    {
        return view('arendatario.referencias');
    }

    public function roomies()
    {
        return view('arendatario.roomies');
    }
}
