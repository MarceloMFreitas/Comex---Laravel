<x-layout title="Novo Produto">

    <x-form :action="route('produtos.store')" :mome="old('nome')" :update="false"/>
    
</x-layout>