<?php

namespace App\Mail;

use App\Models\Guest;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailInvitacionPropietario extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public  $user, $arendatario;

    public function __construct(Guest $user, User $arendatario)
    {
        $this->user = $user;
        $this->arendatario = $arendatario;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.mail-invitacion-propietario')->from('daniel.uribe.garcia07@gmail.com', 'Homie - Invitación de un alquilino')
            ->subject('Un alquilino te ha enviado una invitación a homie');
    }
}
