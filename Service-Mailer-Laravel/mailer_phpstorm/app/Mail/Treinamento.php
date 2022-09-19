<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class Treinamento extends Mailable
{
    use Queueable, SerializesModels;
    private $user;
    private $item;
    private $copy;
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
        $this->copy = ['dp@online.net.br', 'rh@online.net.br'];
//        definição de passada de parêmetros
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): Treinamento
    {
//        configuração de email e modelo do email

        $this->subject('Treinamento Desk Manager - Consultoras');
        $this->to($this->item,$this->user->name);
        $this->cc($this->copy);

        return $this->markdown('mail.Treinamento', [
            'user' => $this->user
        ]);
    }
}
