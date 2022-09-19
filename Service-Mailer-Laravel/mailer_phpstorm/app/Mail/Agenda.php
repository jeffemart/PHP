<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class Agenda extends Mailable
{
    use Queueable, SerializesModels;
    private $user;
    private $item;
//    classes de parâmetros

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(stdClass $user, $item)
    {
        $this->user = $user;
        $this->item = $item;
//        definição de passada de parêmetros
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): Agenda
    {
//        configuração de email e modelo do email
        $this->subject('Agendamento e treinamento');
        $this->to($this->item, $this->user->name);

        return $this->markdown('mail.Agenda', [
            'user' => $this->user
        ]);
    }
}
