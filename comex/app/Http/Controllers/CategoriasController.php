<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index(Request $request){
        $categorias = Categoria::query()->orderBy('nome')->get() ;

        $mensagemSucesso = session('mensagem.sucesso');
        
        return view('categorias.index')->with('categorias',$categorias)->with('mensagemSucesso', $mensagemSucesso) ;

    }

    public function create(){
        return view('categorias.create');
    }

    
    public function store(Request $request){
       
        $categoria = Categoria::create($request->all());

        session()->flash('mensagem.sucesso',"Categoria '$categoria->nome' adicionada com sucesso");

        return to_route('categorias.index');
    }

    public function destroy(Request $request, Categoria $categoria){
        
        $categoria->delete();
        session()->flash('mensagem.sucesso',"Categoria '$categoria->nome' removida com sucesso");
        return to_route('categorias.index');
    }
}
