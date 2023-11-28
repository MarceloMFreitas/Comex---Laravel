<x-layout title="Produtos">

@isset($mensagemSucesso)
    <div class="alert alert-success">
        {{$mensagemSucesso}}
    </div>
@endisset

   
    <ul class="list-group">
        @foreach ($produtos as $produto )

            <li class="list-group-item d-flex justify-content-between align-items-center">{{$produto->nome}}
                <span class="d-flex">
                    <a href="{{route('produtos.edit', $produto->id)}}" class="btn btn-primary btn-sm">E</a>
                    <form action="{{ route('produtos.destroy', $produto->id)}}" method="post" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">X</button>
                    </form>
                </span>
            </li>    
        
        @endforeach
    </ul>

    <a href="{{route('produtos.create')}}" class="btn btn-primary mb-2">Adicionar</a>


</x-layout>