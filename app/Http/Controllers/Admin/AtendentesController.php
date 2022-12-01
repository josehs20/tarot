<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Atendente;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AtendentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuarios = User::with('atendente')->where('name', 'like', '%' . $request->nome . '%')->where('perfil', 'atendente')->get();
      
        return view('admin.atendentes.index', compact('usuarios'));
    }

    public function get_usuarios(Request $request)
    {

        $usuarios = User::with('atendente')->where('email', 'like', '%' . $request['nome'] . '%')->get();

        return response()->json($usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.atendentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->usuario,
            'email' => $request->email,
            'password' => bcrypt($request->senha),
            'perfil' => 'atendente'
        ]);

        $user->atendente()->create([
            'nome' => $request->nome,
            'criado' => now('America/Sao_Paulo')->format('Y-m-d H:i:s'),
            'situacao' => 'offline',
            'status' => 'Ativo',
            'descricao' => $request->descricao,
            'comissao' => floatval($request->comissao)
        ]);

        Session::flash('success', 'Atendente criado com sucesso');

        $this->upload_imagem_avatar($request, $user);

        return redirect()->route('atendentes.index');
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
        $user = User::with('atendente')->find($id);

        return view('admin.atendentes.edit', compact('user'));
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
        try {
            $user = User::find($id);
            $user->update([
                'name' => $request->usuario,
                'email' => $request->email,
                'password' => $request->senha ? bcrypt($request->senha) : $user->password,
            ]);

            $user->atendente()->update([
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'comissao' => floatval($request->comissao)
            ]);

            if ($request->has('img')) {

                Storage::delete('public/' . $user->imagem->caminho);
                $user->imagem()->delete();
                $this->upload_imagem_avatar($request, $user);
            }
            Session::flash('success', 'Atendente atualizado com sucesso');

            return redirect()->route('atendentes.index');
        } catch (\Exception $e) {
            if ($e->getCode() == 23000) {
                Session::flash('error', 'Já existe atendente com este email');

                return redirect()->route('atendentes.edit', $id);
            }
            Session::flash('error', 'Algo deu errado tente novamente');

            return redirect()->route('atendentes.edit', $id);
        }
    }

    public function update_status_atendente(Request $request)
    {
        $user = User::with('atendente')->find($request->id);
        $user->atendente->update(['status' => $request->status]);

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

    public function upload_imagem_avatar($request, $user)
    {
        // for ($i = 0; $i < count($request->file('img')); $i++) {

        //retira os espaços do nome da imagem
        $nameImage = remove_espacos($request->file('img')->getClientOriginalName());

        //baixa para storage/public/users/imgs/ e cria diretorio e faz o upload de acordo com id do produto
        $dir = $request->file('img')->storeAs('public/users/imgs/' . $user->id,  $nameImage);

        //cria caminho da imagem no banco de acordo com id de produto
        $user->imagem()->create(['caminho' => str_replace('public/', '', $dir), 'tipo' => 'avatar']);

        //recupera imagem para redimencionar
        $img = Image::make('storage/users/imgs/' . $user->id . '/' . $nameImage);
        $img->resize(250, 250)->save('storage/users/imgs/' . $user->id . '/' . $nameImage);
        // $img->resize(200, 200, function ($constraint) {
        //     $constraint->aspectRatio();
        //     $constraint->upsize();
        // })->save('storage/users/imgs/'. $nameImage, null, 'jpg');
        // }
        // return;
    }
}
