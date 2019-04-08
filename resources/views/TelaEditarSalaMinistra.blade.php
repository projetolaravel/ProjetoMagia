<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sala</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/estiloMembros.css')}}" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body id="telaMembros">
<form action="{{route('salaM.store')}}" method="POST">
        @csrf
        @method('PUT')
        <div class = "form-group">
            <h1>Edição de Sala</h1>
            <label for="nome">Nome: </label>
            <input type = "text" class = "form-control" id="nome" name="nomeSala" value="{{$sala->nome}}">
            <label for="departamento">Id do Departamento</label>
                <input class="form-control" type="text" id="sala" name="nomeId" value="{{$sala->departamneot_id}}">
            <button id="btn"class = "btn btn-outline-light" type = "submit">Salvar</button>
        </div>
    </form>
</body>
</html>