<x-layout title="Categorias">

@isset($mensagemSucesso)
    <div class="alert alert-success">
        {{$mensagemSucesso}}
    </div>
@endisset

   
    <ul class="list-group">
        @foreach ($categorias as $categoria )

            <li class="list-group-item d-flex justify-content-between align-items-center">{{$categoria->nome}}
                <span class="d-flex">
                    <a href="{{route('categorias.edit', $categoria->id)}}" class="btn btn-primary btn-sm">E</a>
                    <form action="{{ route('categorias.destroy', $categoria->id)}}" method="post" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">X</button>
                    </form>
                </span>
            </li>    
        
        @endforeach
    </ul>

    <a href="{{route('categorias.create')}}" class="btn btn-primary mb-2">Adicionar</a>


</x-layout>