<x-layout title="Nova Categoria">

    <form action="/categorias/cadastrar" method="post">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
        </div>
        <button type="submit">Adicionar</button>
    </form>

</x-layout>