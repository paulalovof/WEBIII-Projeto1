@extends('components.nav')
@section('title', 'Nova Turma')
@section('principal-nav', 'Nova Turma')

@section('conteudo')

<div class="mt-5 mx-5">
    <div class="mx-5">
        <a href="{{route('turma.index')}}" type="button" class="btn btn-secondary p-5 py-2" >Voltar</a>
    </div>     
</div>

    <div class="d-flex justify-content-center m-5">
        <form action="{{route('turma.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <label for="nome" class="text-sm font-medium text-gray-700">Nome:</label>
                <br>
                <input type="text" name="nome" class="rounded border border-grey-300 px-3 py-2"><br>
            </div>

            <div class="mt-3">
                <label for="ano" class="text-sm font-medium text-gray-700">Ano:</label>
                <br>
                <input type="text" name="ano" class="rounded border border-grey-300 px-3 py-2"><br>
            </div>
            
            <div class="mt-3">
                <label for="Sigla" class="text-sm font-medium text-gray-700">Sigla:</label>
                <br>
                <input type="text" name="sigla" class="rounded border border-grey-300 px-3 py-2"><br>
            </div>
            
            <div class="d-flex justify-content-center m-4">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>
@endsection