<x-layout title="Categorias">

   
    <ul class="list-group">
        @foreach ($categorias as $categoria )

            <li class="list-group-item">{{$categoria->nome}}</li>    
        
        @endforeach
    </ul>

    <a href="{{route('categorias.create')}}" class="btn btn-primary mb-2">Adicionar</a>


</x-layout>