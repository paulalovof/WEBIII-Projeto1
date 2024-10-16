<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Turma</title>
</head>
<body>
    <h1>Editar Turma</h1>

    <div class="">
        <form action="{{route('turma.update', $turma->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="p-2">
                <p>Nome:</p>
                <input type="text" name="nome" class="sm:rounded-lg" value="{{$turma->nome}}"><br>
            </div>

            <div class="p-2">
                <p>Ano:</p>
                <input type="text" name="ano" class="sm:rounded-lg" value="{{$turma->ano}}"><br>
            </div>

            <div class="p-2">
                <p>Sigla:</p>
                <input type="text" name="sigla" class="sm:rounded-lg" value="{{$turma->sigla}}"><br>
            </div>
    
            <div class="pt-5">
                <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>