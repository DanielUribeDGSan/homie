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
}
