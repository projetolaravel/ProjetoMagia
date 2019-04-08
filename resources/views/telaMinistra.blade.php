<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ministra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/estiloMinistra.css')}}" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body id="telaMinistra">
    <nav id="menu" ><center>
        <h1>Bem-vinda de volta, ministra!</h1>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="{{route('salaM.create')}}">Cadastrar Sala</a></li>
            <li><a href="{{route('salaM.index')}}">Gerenciar Sala</a></li>
            <li><a href="{{route('departamento.create')}}">Cadastrar Departamento</a></li>
            <li><a href="{{route('departamento.index')}}">Gerenciar Departamento</a></li>
            <li><a href="{{route('coordenadores.create')}}">Cadastrar Coordenador</a></li>
            <li><a href="{{route('coordenadores.index')}}">Gerenciar Coordenadores</a></li>
            <li><a href="{{route('funcionariosM.index')}}">Gerenciar Funcionarios</a></li>
            <li><a href="{{route('funcionariosM.create')}}">Cadastrar Funcionário</a></li>
        </ul>
        </center>   
    </nav>
</body>
</html>