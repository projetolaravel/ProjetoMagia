<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tela Coodenador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/estiloCoordenador.css')}}" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body id="telaCoordenador">
    <nav id="menu" ><center>
        <h1>Hello, wizard!</h1>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="{{route('funcionariosC.create')}}">Cadastrar Funcionário</a></li>
            <li><a href="{{route('funcionariosC.index')}}">Gerenciar Funcionarios</a></li>
            <li><a href="{{route('salaC.create')}}">Cadastrar Sala</a></li>
            <li><a href="{{route('salaC.index')}}">Gerenciar Sala</a></li>
        </ul>
        </center>
    </nav>
</body>
</html>
