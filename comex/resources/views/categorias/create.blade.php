<x-layout title="Nova Categoria">

    <x-form :action="route('categorias.store')" :mome="old('nome')" :update="false"/>
    
</x-layout>