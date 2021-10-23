<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrokerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function datos_inquilino_propietario()
    {
        return view('broker.datos-inquilino-propietario');
    }
}
