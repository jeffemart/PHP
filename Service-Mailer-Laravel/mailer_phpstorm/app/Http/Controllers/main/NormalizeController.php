<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Jobs\Agenda;
use App\Jobs\Mailer;
use App\Jobs\Releases;
use App\Jobs\Treinamento;
use Illuminate\Support\Facades\DB;
use stdClass;

/**
 * @method markdown(string $string)
 */
class NormalizeController extends Controller
{
//    função que retorna uma view do bem vndo padrão
    public function welcome()
    {
        return view('welcome');
    }

//    função que retorna uma view do dashboard
    public function dashboard()
    {
        return view('dashboard');
    }

//    função que retorna uma view para chamada dos modelos
    public function enviar()
    {
        return view('send');
    }

//    função para criar objeto e retornar modelo do changelog
    public function changelog()
    {
//        criação de objeto vazio do php
//        busca de informações do banco
        $user = new stdClass();
        $user->name = DB::table('users')->pluck('name');
        $user->email = ['jefferson.martins@online.net.br'];
//        $user->email = DB::table('users')->pluck('email')->toArray();

        Mailer::dispatch($user);
        var_dump($user->email);
//        vardump para debugar em testes
//        return $this->markdown('mail.changelog');
    }

//    função para criar objeto e retornar modelo do release
    public function release()
    {
//        criação de objeto vazio do php
//        busca de informações do banco
        $user = new stdClass();
        $user->name = DB::table('users')->pluck('name');
        $user->email = ['jefferson.martins@online.net.br'];

        Releases::dispatch($user);
        var_dump($user->email);
//        vardump para debugar em testes
//        return $this->markdown('mail.Releases');
    }

//    função para criar objeto e retornar modelo do agenda
    public function agenda()
    {
//        criação de objeto vazio do php
//        busca de informações do banco
        $user = new stdClass();
        $user->name = DB::table('users')->pluck('name');

//        $user->email = DB::table('users')->pluck('email')->toArray();
        $user->email = ['jefferson.martins@online.net.br'];

        Agenda::dispatch($user);
        var_dump($user->email);
//        vardump para debugar em testes
//        return $this->markdown('mail.Agenda');
    }

//    função para criar objeto e retornar modelo do treinamento
    public function treinamento()
    {
//        criação de objeto vazio do php
//        busca de informações do bancos
        $user = new stdClass();
        $user->name = DB::table('users')->pluck('name');

//        $user->email = DB::table('users')->pluck('email')->toArray();
        $user->email = ['jefferson.martins@online.net.br'];

        Treinamento::dispatch($user);
//        vardump para debugar em testes

    }
}
