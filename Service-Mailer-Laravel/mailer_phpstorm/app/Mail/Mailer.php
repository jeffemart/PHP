<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class Mailer extends Mailable
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
    public function build(): Mailer
    {
//        configuração de email e modelo do email

        $this->subject('Esse é o assunto do changelog');
        $this->to($this->item,$this->user->name);

        return $this->markdown('mail.Mailer', [
            'user' => $this->user
        ]);
    }
}
