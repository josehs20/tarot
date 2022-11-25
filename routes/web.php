<?php

use App\Http\Controllers\Admin\AtendentesController;
use App\Http\Controllers\Admin\Dashboard\AtendimentoController;
use App\Http\Controllers\Admin\Dashboard\EstatisticaController;
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
    return view('welcome');
});

Auth::routes();

Route::middleware('admin')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //DASHBOARD
    Route::resource('/estatisticas', EstatisticaController::class);
    Route::resource('/atendimentos', AtendimentoController::class);
    //ATENDENTES
    Route::resource('/atendentes', AtendentesController::class);
    Route::get('/get_usuarios', [\App\Http\Controllers\Admin\AtendentesController::class, 'get_usuarios']);


});

