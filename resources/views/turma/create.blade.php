<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Turma</title>
</head>
<body>

    <h1>Nova Turma</h1>
    
    <div>
        <form action="{{route('turma.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <p>Nome:</p>
                <input type="text" name="nome" class="sm:rounded-lg"><br>
            </div>

            <div class="">
                <p>Ano:</p>
                <input type="text" name="ano" class="sm:rounded-lg"><br>
            </div>
            
            <div class="">
                <p>Sigla:</p>
                <input type="text" name="sigla" class="sm:rounded-lg"><br>
            </div>
            
            <div class="">
                <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>