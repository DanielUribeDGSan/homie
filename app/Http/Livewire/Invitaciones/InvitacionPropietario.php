<?php

namespace App\Http\Livewire\Invitaciones;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class InvitacionPropietario extends Component
{
    protected $listeners = ['registrarFormulario'];

    public $createForm = [
        'name' => "",
        'phone' => "",
        'email' => "",
        'password' => "",
        'type' => "",
    ];

    protected $rules = [
        'createForm.name' => 'required|max:255',
        'createForm.phone' => 'required|max:20',
        'createForm.email' => 'required|max:255|unique:users,email',
        'createForm.password' => 'required|max:255',
        'createForm.type' => 'required|max:255',
    ];

    protected $validationAttributes = [
        'createForm.name' => 'Nombre',
        'createForm.phone' => 'Teléfono',
        'createForm.email' => 'Email',
        'createForm.password' => 'Contraseña',
        'createForm.type' => 'Tipo de usuario',
    ];

    public function registrarFormulario()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->createForm['name'],
            'phone' => $this->createForm['phone'],
            'email' => $this->createForm['email'],
            'password' => bcrypt($this->createForm['password'])
        ]);

        $user->assignRole('propietario');

        // Mail::to($this->createForm['email'])->send(new MailRegister($user, $this->createForm['password']));
        Auth::login($user);
        return redirect()->route('arendatario.datos_propietario');
    }

    public function render()
    {
        return view('livewire.invitaciones.invitacion-propietario');
    }
}
