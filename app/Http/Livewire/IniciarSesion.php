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
                // Auth::login($user);
                // return redirect()->route('propietario.datos_inquilino', $transaction);
                if ($user->hasRole('broker')) {
                    dd('broker');
                } else if ($user->hasRole('propietario')) {
                    dd('propietario');
                } else if ($user->hasRole('arendatario')) {
                    Auth::login($user);
                    if ($user->fase == 0) {
                        redirect()->route('inquilino.datos_propietario', $user->transaction);
                    } else if ($user->fase == 1) {
                        redirect()->route('inquilino.datos_personales');
                    } else if ($user->fase == 2) {
                        redirect()->route('inquilino.referencias');
                    } else if ($user->fase == 3) {
                        redirect()->route('inquilino.roomies');
                    }
                }
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
