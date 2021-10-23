<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IniciarSesion extends Component
{
    protected $listeners = ['validarDatos'];

    public $formLogin = [
        'email' => "",
        'password' => "",
    ];

    protected $rules = [
        'formLogin.email' => 'required|max:255',
        'formLogin.password' => 'required|max:255',
    ];

    protected $validationAttributes = [
        'formLogin.email' => 'Email',
        'formLogin.password' => 'Contraseña',
    ];

    public function validarDatos()
    {
        $user = User::where('email', $this->formLogin['email'])->first();
        if (!is_null($user)) {
            if (Hash::check($this->formLogin['password'], $user->password)) {
                Auth::login($user);
                // return redirect()->route('propietario.datos_inquilino', $transaction);
            } else {
                $this->emit('errorLogin');
            }
        } else {
            $this->emit('errorLogin');
        }
    }

    public function render()
    {
        return view('livewire.iniciar-sesion');
    }
}
