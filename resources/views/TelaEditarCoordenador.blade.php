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
<form action = "{{route('coordenadores.update', $coordenadores)}}" method = "POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class = "form-group">
            <h1>Edição de Coordenador</h1>
                <label for="nome">Id Departamento</label>
                <input class="form-control" type="text" id="id" name="id_depart" value="{{$coordenadores->id_depart}}">
                <label for="nome">Nome: </label>
                <input type = "text" class = "form-control" id="nome" name="nomeCoordenador" value="{{$coordenadores->nome}}">
                <label for="sexo">Sexo</label>
                <input class="form-control" type="text" id="endereco" name="nomeSexo" value="{{$coordenadores->sexo}}">
                <label for="endereco">Endereço</label>
                <input class="form-control" type="text" id="endereco" name="nomeEndereco" value="{{$coordenadores->endereco}}">
                <label for="rub">RUB</label>
                <input class="form-control" type="text" id="rub" name="nomeRub" value="{{$coordenadores->rub}}">
                <label for="nick">nickname</label>
                <input class="form-control" type="text" id="nickname" name="nomeNick"
                 placeholder="Pode ser aquele apelido da faculdade!" value="{{$coordenadores->nick}}">
                <label for="senha">Senha</label>
                <input class="form-control" type="password" id="senha" name="nomeSenha" value="{{$coordenadores->senha}}">
                <label for="foto">Foto: </label>
                <input class = "form-control-file" type="file" id="primaryImage"  name="nomeFoto" value="{{$coordenadores->foto}}">
            <button id="btn" class = "btn btn-outline-light" type = "submit">Salvar</button>
        </div>
    </form>
</body>
</html>