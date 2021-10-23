<?php

namespace App\Http\Livewire;

use App\Mail\MailRegister;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class FormRegisterBroker extends Component
{
    protected $listeners = ['registrarFormulario'];

    public $createForm = [
        'name' => "",
        'phone' => "",
        'email' => "",
        'password' => "",
    ];

    protected $rules = [
        'createForm.name' => 'required|max:255',
        'createForm.phone' => 'required|max:20',
        'createForm.email' => 'required|max:255|unique:users,email',
        'createForm.password' => 'required|max:255',
    ];

    protected $validationAttributes = [
        'createForm.name' => 'Nombre',
        'createForm.phone' => 'Teléfono',
        'createForm.email' => 'Email',
        'createForm.password' => 'Contraseña',
    ];

    public function registrarFormulario()
    {
        $this->validate();

        $user = User::create([
            'name' => trim(
                $this->createForm['name']
            ),
            'phone' => trim(
                $this->createForm['phone']
            ),
            'email' => trim(
                $this->createForm['email']
            ),
            'password' => trim(
                bcrypt($this->createForm['password'])
            ),
            'fase' => 0,
        ]);


        $user->assignRole('broker');
        Mail::to($this->createForm['email'])->send(new MailRegister($user, $this->createForm['password']));
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
        Auth::login($user);
        return redirect()->route('broker.datos_propietario_inquilino', $transaction);
    }
    public function render()
    {
        return view('livewire.form-register-broker');
    }
}
