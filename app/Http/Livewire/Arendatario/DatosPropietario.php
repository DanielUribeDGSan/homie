<?php

namespace App\Http\Livewire\Arendatario;

use App\Mail\MailInvitacionPropietario;
use App\Models\Guest;
use App\Models\Transaction;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;


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
        'createForm.email' => 'required|max:255',
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
            'name' => trim(
                $this->createForm['name']
            ),
            'phone' => trim(
                $this->createForm['phone']
            ),
            'email' => trim(
                $this->createForm['email']
            ),
            'transaction' => trim(
                $this->transaccion_user
            ),
        ]);


        $transaction_user = Transaction::where('transaction', $this->transaccion_user)->first();
        $arendatario = User::where('id', $transaction_user->user_id)->first();
        $arendatario->update(
            [
                'fase' => 1,
            ]
        );
        Mail::to($this->createForm['email'])->send(new MailInvitacionPropietario($user, $arendatario));

        return redirect()->route('arendatario.datos_personales');
    }

    public function render()
    {
        return view('livewire.arendatario.datos-propietario');
    }
}
