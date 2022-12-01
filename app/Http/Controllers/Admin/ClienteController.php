<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuarios = User::with('cliente')->where('name', 'like', '%' . $request->nome . '%')->where('perfil', 'cliente')->get();

        return view('admin.clientes.index', compact('usuarios'));
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
        $user = User::with('cliente')->find($id);

        return view('admin.clientes.edit', compact('user'));
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
        $user = User::with('cliente')->find($id);
        try {
            $user->update([
                'name' => $request->usuario,
                'email' => $request->email,
                'password' => $request->senha ? bcrypt($request->senha) : $user->password,
            ]);

            $user->cliente()->update([
                'nome' => $request->nome,
                'telefone' => str_replace(' ', '', $request->telefone),
                'nascimento' => $request->nascimento,
                'sexo' => $request->sexo,
                'tempo' => str_replace(':', '.', $request->tempo),
            ]);

            Session::flash('success', 'Cliente alterado com sucesso!');

            return redirect()->route('clientes.index');
        } catch (\Exception $e) {

            if ($e->getCode() == 23000) {
                Session::flash('error', 'Já existe atendente com este email');

                return redirect()->route('clientes.edit', $id);
            }

            Session::flash('error', 'Algo deu errado tente novamente');
            return redirect()->route('clientes.edit', $id);
        }
    }

    public function update_status_cliente(Request $request)
    {
        $user = User::with('cliente')->find($request->id);
        $user->cliente->update(['status' => $request->status]);

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
        $user = User::find($id)->delete();
        return response()->json(['msg' =>  'Atendente excluído com sucesso']);
    }
}
