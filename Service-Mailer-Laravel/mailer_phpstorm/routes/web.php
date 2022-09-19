<?php

use App\Http\Controllers\main\NormalizeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [NormalizeController::class, 'welcome']);

Route::namespace('maile')->group(function (){

//    Rota para chamada de funções estática
    Route::get('enviar', [NormalizeController::class, 'enviar']);
    /**/

//    Rotas para requisição do markdown e jobs do database
    Route::get('enviar/changelog', [NormalizeController::class, 'changelog'])->name('changelog');
    Route::get('enviar/release', [NormalizeController::class, 'release'])->name('release');
    Route::get('enviar/agenda', [NormalizeController::class, 'agenda'])->name('agenda');
    Route::get('enviar/treinamento', [NormalizeController::class, 'treinamento'])->name('treinameno');
    /**/
});

Route::group(['middleware' => ['auth']], function (){
    Route::get('/dashboard', [NormalizeController::class])->name('dashboard');
});

require __DIR__.'/auth.php';

