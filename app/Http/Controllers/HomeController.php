<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user() && auth()->user()->IsAdmin()) {

            Session::flash('success', 'Bem vindo, ' . auth()->user()->name);
            return redirect()->route('estatisticas.index');
        } elseif (auth()->user() && auth()->user()->IsAtendente()) {

            Session::flash('success', 'Bem vindo, ' . auth()->user()->name);
            return redirect()->route('monitor-atendimento.index');
        } else {
            Auth::logout();
            return redirect()->route('home');
        }
        //  view('admin.home');
    }
}
