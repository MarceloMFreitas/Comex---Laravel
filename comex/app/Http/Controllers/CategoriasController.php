<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index(){
        $categorias = Categoria::query()->orderBy('nome')->get() ;
        
        return view('categorias.index')->with('categorias',$categorias ) ;

    }

    public function create(){
        return view('categorias.create');
    }
    public function store(Request $request){
       
        $nomeCategoria = $request->input('nome');
       
        $categoria = new Categoria();
        $categoria->nome = $nomeCategoria;
        $categoria->save();


        return redirect('/categorias');
    }
}
