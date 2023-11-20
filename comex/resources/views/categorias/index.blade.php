<x-layout title="Categorias">

    <a href="/categorias/salvar">Adicionar</a>

    <ul>
        @foreach ($categorias as $categoria )

            <li>{{$categoria->nome}}</li>    
        
        @endforeach
    </ul>

</x-layout>