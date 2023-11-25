<x-layout title="Editar Categoria '{{$categoria->nome}}' ">

    <x-form :action="route('categorias.update', $categoria->id)" :nome="$categoria->nome"/>
    
</x-layout>