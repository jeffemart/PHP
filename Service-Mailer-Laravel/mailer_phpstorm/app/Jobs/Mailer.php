<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use stdClass;

class Mailer implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $user;
    public $tries = 1;
    public $timeout = 9999999;
//    é importante definir timeout da conexão para o servidor não matar o
//    trabalho da fila

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(stdClass $user)
    {
        $this->user = $user;
//        definindo usuário do objeto vazio do php
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        Loop feito para iterar sobre lista de arrays
        //Mail::send(new \App\Mail\Mailer($this->user));

        foreach ($this->user->email as $item){
            //Mail::send(new \App\Mail\Mailer($this->user));
            Mail::to($item)->send(new \App\Mail\Mailer($this->user, $item));
            sleep('1');
        }
    }
}
