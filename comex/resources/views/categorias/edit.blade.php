<x-layout title="Editar Categoria '{{$categoria->nome}}' ">

    <x-form :action="route('categorias.update', $categoria->id)" :nome="$categoria->nome" :update="true"/>
    
</x-layout>