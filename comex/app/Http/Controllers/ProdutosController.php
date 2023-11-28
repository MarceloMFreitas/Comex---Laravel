<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests\ProdutosFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index(Request $request){
        $produtos = Produto::query()->orderBy('nome')->get() ;

        $mensagemSucesso = session('mensagem.sucesso');
        
        return view('produtos.index')->with('produtos',$produtos)->with('mensagemSucesso', $mensagemSucesso) ;

    }

    public function create(){
        return view('produtos.create');
    }

    
    public function store(ProdutosFormRequest $request){

       
        $produto = Produto::create($request->all());


        return to_route('produtos.index')->with('mensagem.sucesso',"Produto '$produto->nome' adicionado com sucesso");
    }

    public function destroy(Request $request, Produto $produto){
        
        $produto->delete();
    
        return to_route('produtos.index')->with('mensagem.sucesso',"Produto '$produto->nome' removido com sucesso");
    }
    public function edit(Produto $produto){
        
        return view('produtos.edit')->with('categoria',$produto);

    }

    public function update(ProdutosFormRequest $request, Produto $produto){
        $produto->fill($request->all());
        $produto->save();
        return to_route('produtos.index')->with('mensagem.sucesso',"Produto '$produto->nome' atualizado com sucesso");
    }
}
