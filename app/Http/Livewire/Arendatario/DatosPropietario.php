<?php

namespace App\Http\Livewire\Arendatario;

use App\Mail\MailInvitacionPropietario;
use App\Models\Guest;
use App\Models\Owner;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class DatosPropietario extends Component
{
    protected $listeners = ['registrarFormulario'];

    public $transaccion_user;

    public $createForm = [
        'name' => "",
        'phone' => "",
        'email' => "",
    ];

    protected $rules = [
        'createForm.name' => 'required|max:255',
        'createForm.phone' => 'required|max:20',
        'createForm.email' => 'required|max:255|unique:guests,email',
    ];

    protected $validationAttributes = [
        'createForm.name' => 'Nombre',
        'createForm.phone' => 'Teléfono',
        'createForm.email' => 'Email',
    ];

    public function registrarFormulario()
    {
        $this->validate();

        $user = Guest::create([
            'name' => $this->createForm['name'],
            'phone' => $this->createForm['phone'],
            'email' => $this->createForm['email'],
            'transaction' => $this->transaccion_user,
        ]);

        Mail::to($this->createForm['email'])->send(new MailInvitacionPropietario($user));

        return redirect()->route('arendatario.datos_personales');
    }

    public function render()
    {
        return view('livewire.arendatario.datos-propietario');
    }
}
