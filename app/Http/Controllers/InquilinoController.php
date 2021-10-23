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

    public function files(Request $request)
    {
        $request->validate(['file' => 'required|image|max:2048']);

        if ($request->hasFile("file")) {
            $imagen = $request->file("file");
            $nombreimagen   = Str::slug($request->file("file")) . "." . $imagen->guessExtension();
            $ruta = public_path('assets/images/products');

            $imagen->move($ruta, $nombreimagen);
            $imageUrl =   'products/' . $nombreimagen;

            // $product->images()->create([
            //     'url' => $imageUrl
            // ]);
        }
    }
}
