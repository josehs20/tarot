<?php

use App\Http\Controllers\Admin\AtendentesController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\Dashboard\AtendimentoController;
use App\Http\Controllers\Admin\Dashboard\EstatisticaController;
use App\Http\Controllers\Atendente\MonitorAtendimentoController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('cliente.inicio');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('IsAtendente')->group(function (){
    Route::resource('/monitor-atendimento', MonitorAtendimentoController::class);

});

Route::middleware('IsAdmin')->group(function () {
    //DASHBOARD
    Route::resource('/estatisticas', EstatisticaController::class);
    Route::resource('/atendimentos', AtendimentoController::class);
    //ATENDENTES
    Route::resource('/atendentes', AtendentesController::class);
        //ajax
    Route::get('/get_usuarios', [\App\Http\Controllers\Admin\AtendentesController::class, 'get_usuarios']);
    Route::put('/update-status-atendente', [\App\Http\Controllers\Admin\AtendentesController::class, 'update_status_atendente']);

    //Clientes
    Route::resource('/clientes', ClienteController::class);
    Route::put('/update-status-cliente', [\App\Http\Controllers\Admin\ClienteController::class, 'update_status_cliente']);

});
