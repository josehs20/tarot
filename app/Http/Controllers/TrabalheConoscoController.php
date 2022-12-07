<?php

namespace App\Http\Controllers;

use App\Models\Curriculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class TrabalheConoscoController extends Controller
{

    //rotas privadas
    public function index(Request $request)
    {
        $curriculos = Curriculo::where('nome', 'like', "%{$request->nome}%")->get();
        return view('admin.trabalheConosco.index', compact('curriculos'));
    }

    public function download_curriculo($id)
    {
       $curriculo = Curriculo::find($id);
       $curriculo->update(['status' => true]);
       return Storage::download('public/'.$curriculo->curriculo);
    }

    public function delete_curriculo($id)
    {
       
            Curriculo::find($id)->delete();

            return response()->json(['msg' => 'Currículo excluído com sucesso!']);
        
    }

    //rotas abertas
    public function index_envio_curriculo()
    {

        return view('cliente.trabalhe-conosco');
    }

    public function post_envio_curriculo(Request $request)
    {
        try {
            $curriculo = Curriculo::create($request->except('curriculo'));
            //retira os espaços do nome da imagem
            $nameArquivo = remove_espacos($request->file('curriculo')->getClientOriginalName());

            //baixa para storage/public/users/imgs/ e cria diretorio e faz o upload de acordo com id do produto
            $dir = $request->file('curriculo')->storeAs('public/curriculos/' . $curriculo->id,  $nameArquivo);

            //cria caminho da imagem no banco de acordo com id de produto
            $curriculo->update(['curriculo' => str_replace('public/', '', $dir)]);

            Session::flash('success', 'Currículo enviado com sucesso!');

            return redirect()->route('index_envio_curriculo');
        } catch (\Exception $e) {
            Session::flash("error', 'Não foi possível tente novamente!, [Error => {$e->get}]");

            return redirect()->route('index_envio_curriculo');
        }
    }
}
