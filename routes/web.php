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
    return redirect()->route('home_cliente');
});
//CLIENTE
Route::get('/inicio', [\App\Http\Controllers\Cliente\HomeClienteController::class, 'index'])->name('home_cliente');

Route::get('/trabalhe-conosco-curriculos', [\App\Http\Controllers\TrabalheConoscoController::class, 'index_envio_curriculo'])->name('index_envio_curriculo');
Route::post('/post-trabalhe-conosco-curriculos', [\App\Http\Controllers\TrabalheConoscoController::class, 'post_envio_curriculo'])->name('post_envio_curriculo');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('IsAtendente')->group(function (){
    Route::resource('/monitor-atendimento', MonitorAtendimentoController::class);

});

Route::middleware('IsAdmin')->group(function () {
    //DASHBOARD
    Route::get('/count-notificacoes', [\App\Http\Controllers\Admin\Dashboard\EstatisticaController::class, 'count_notificacoes']);
    Route::resource('/estatisticas', EstatisticaController::class);
    Route::resource('/atendimentos', AtendimentoController::class);
   
    //ATENDENTES
    Route::resource('/atendentes', AtendentesController::class);
    Route::get('/get_usuarios', [\App\Http\Controllers\Admin\AtendentesController::class, 'get_usuarios']);
    Route::put('/update-status-atendente', [\App\Http\Controllers\Admin\AtendentesController::class, 'update_status_atendente']);

    //CLIENTES
    Route::resource('/clientes', ClienteController::class);
    Route::put('/update-status-cliente', [\App\Http\Controllers\Admin\ClienteController::class, 'update_status_cliente']);

    //TRABALHE CONOSCO
    Route::get('/trabalhe-conosco', [\App\Http\Controllers\TrabalheConoscoController::class, 'index'])->name('index_tc_admin');
    Route::get('/download-curriculo/{id}', [\App\Http\Controllers\TrabalheConoscoController::class, 'download_curriculo'])->name('download_curriculo');
    Route::delete('/curriculo/{id}', [\App\Http\Controllers\TrabalheConoscoController::class, 'delete_curriculo'])->name('delete_curriculo');

});
