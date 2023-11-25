<x-layout title="Categorias">

@isset($mensagemSucesso)
    <div class="alert alert-success">
        {{$mensagemSucesso}}
    </div>
@endisset

   
    <ul class="list-group">
        @foreach ($categorias as $categoria )

            <li class="list-group-item d-flex justify-content-between align-items-center">{{$categoria->nome}}

                <form action="{{ route('categorias.destroy', $categoria->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">X</button>
                </form>

            </li>    
        
        @endforeach
    </ul>

    <a href="{{route('categorias.create')}}" class="btn btn-primary mb-2">Adicionar</a>


</x-layout>