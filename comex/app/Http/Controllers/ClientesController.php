<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientesFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index(Request $request){
        $clientes = Cliente::query()->orderBy('nome')->get() ;

        $mensagemSucesso = session('mensagem.sucesso');
        
        return view('clientes.index')->with('clientes',$clientes)->with('mensagemSucesso', $mensagemSucesso) ;

    }

    public function create(){
        return view('clientes.create');
    }

    
    public function store(ClientesFormRequest $request){

       
        $categoria = Cliente::create($request->all());


        return to_route('clientes.index')->with('mensagem.sucesso',"Cliente '$categoria->nome' adicionado com sucesso");
    }

    public function destroy(Request $request, Cliente $cliente){
        
        $cliente->delete();
    
        return to_route('cliente.index')->with('mensagem.sucesso',"Cliente '$cliente->nome' removido com sucesso");
    }
    public function edit(Cliente $cliente){
        
        return view('clientes.edit')->with('cliente', $cliente);

    }

    public function update(ClientesFormRequest $request, Cliente $cliente){
        $cliente->fill($request->all());
        $cliente->save();
        return to_route('categorias.index')->with('mensagem.sucesso',"Cliente '$cliente->nome' atualizada com sucesso");
    }
}
