<x-layout title="Nova Cliente">

    <x-form :action="route('clientes.store')" :mome="old('nome')" :update="false"/>
    
</x-layout>