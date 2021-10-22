<?php

namespace App\Http\Livewire;

use App\Mail\MailRegister;
use App\Models\Transaction;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class FormRegister extends Component
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
            'password' => bcrypt($this->createForm['password']),
            'fase' => 1,
        ]);

        if ($this->createForm['type'] == '1') {
            $user->assignRole('broker');
        } else if ($this->createForm['type'] == '2') {
            $user->assignRole('propietario');
        } else if ($this->createForm['type'] == '3') {
            $user->assignRole('arendatario');
            Mail::to($this->createForm['email'])->send(new MailRegister($user, $this->createForm['password']));
            Auth::login($user);
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';

            $randomNumber = mt_rand(1000000, 9999999)
                . mt_rand(1000000, 9999999)
                . $characters[rand(0, strlen($characters) - 1)];

            $userRegister = User::where('email', $this->createForm['email'])->first();

            $transaction = str_shuffle(strval($userRegister->id) . strval($randomNumber));

            Transaction::create(
                [
                    'transaction' => $transaction,
                    'user_id' => $userRegister->id
                ]
            );

            return redirect()->route('arendatario.datos_propietario', $transaction);
        }
    }

    public function render()
    {
        return view('livewire.form-register');
    }
}
