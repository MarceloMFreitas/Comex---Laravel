<x-layout title="Editar Produto '{{$produto->nome}}' ">

    <x-form :action="route('produtos.update', $produto->id)" :nome="$categoria->nome" :update="true"/>
    
</x-layout>