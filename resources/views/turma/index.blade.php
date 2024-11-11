@extends('components.nav')
@section('title', 'Tabela de Turmas')
@section('principal-nav', 'Tabela de Turmas')

@section('conteudo')


<div class="d-flex justify-content-center m-2">     
    <a href="{{route('turma.create')}}" type="button" class="btn btn-primary" >Cadastrar nova turma</a>
</div>

<div class="d-flex justify-content-center m-2">
    <form method="GET" action="{{ route('turma.index') }}" class="flex justify-center mb-4 w-3/4">
        <input type="text" name="search" placeholder="Buscar turma..." value="{{ request('search') }}"
               class="w-full px-3 py-2 border border-gray-300 rounded shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        <button type="submit" 
                class="btn btn-secondary p-3 py-2 m-2">
            Buscar
        </button>
    </form>
</div>


<table class = "table d-flex justify-content-center">
        <tr>
            <th class="border border-gray-300 px-4 py-2">ID</th>
            <th class="border border-gray-300 px-4 py-2">Nome</th>
            <th class="border border-gray-300 px-4 py-2">Ano</th>
            <th class="border border-gray-300 px-4 py-2">Sigla</th>
            <th class="border border-gray-300 px-4 py-2">Ações</th>
        </tr>
        <?php foreach ($turmas as $turma) { ?>
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{$turma->id}}</td>
                <td class="border border-gray-300 px-4 py-2">{{$turma->nome}}</td>
                <td class="border border-gray-300 px-4 py-2">{{$turma->ano}}</td>
                <td class="border border-gray-300 px-4 py-2">{{$turma->sigla}}</td>
                <td class="border border-gray-300 px-4 py-2">
                    <div class="d-flex gap-2">
                        <span>
                            <a href="{{route('turma.show', $turma->id)}}" type="button" class="btn btn-secondary">Detalhes</a>
                        </span>

                        <span>
                            <a href="{{route('turma.edit', $turma->id)}}" type="button" class="btn btn-secondary">Editar</a>
                        </span>

                        <span>
                            <form method="POST" action="{{route('turma.destroy', $turma->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" value="Remover" class="btn btn-danger">Excluir</button> 
                            </form>
                        </span>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
@endsection