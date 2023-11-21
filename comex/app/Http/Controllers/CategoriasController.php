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
       
        Categoria::create($request->all());

        return to_route('categorias.index');
    }

    public function destroy(Request $request){
        
        Categoria::destroy($request->categoria);
        return to_route('categorias.index');
    }
}
