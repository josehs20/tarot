<?php

namespace App\Http\Controllers\Atendente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class MonitorAtendimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $atendimentos = [];
        $user = User::with('atendente')->find(auth()->user()->id);

        $background = ['online' => '#008000', 'offline' => '#FF0000', 'ocupado' => '#FF8C00'];
        $background = $background[$user->atendente->situacao];

        return view('atendente.monitor-atendimento', compact('atendimentos', 'user', 'background'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::with('atendente')->find($id);
        $user->atendente()->update(['situacao' => $request->situacao]);
        return response()->json(['msg' => 'Status alterado com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
