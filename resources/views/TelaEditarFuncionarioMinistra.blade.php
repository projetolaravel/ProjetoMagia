<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Membros do Ministério</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/estiloMembros.css')}}" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body id="telaMembros">
<form action = "{{route('funcionariosM.update', $funcionarios)}}" method = "POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class = "form-group">
            <h1>Edição de Funcionarios</h1>
            <label for="nome">Nome: </label>
            <input type = "text" class = "form-control" id="nome" name="nomeFuncionario" value="{{$funcionarios->nome}}">
                <label for="sexo">Sexo</label>
                <input class="form-control" type="text" id="endereco" name="nomeSexo" value="{{$funcionarios->sexo}}">
                <label for="endereco">Endereço</label>
                <input class="form-control" type="text" id="endereco" name="nomeEndereco" value="{{$funcionarios->endereco}}">
                <label for="rub">RUB</label>
                <input class="form-control" type="text" id="rub" name="nomeRub" value="{{$funcionarios->rub}}">
                <label for="foto">Foto: </label>
                <input class = "form-control-file" type="file" id="primaryImage"  name="nomeFoto" value="{{$funcionarios->foto}}">
            <br>
            <button class = "btn btn-outline-light" type = "submit">Salvar</button>
        </div>
    </form>
</body>
</html>