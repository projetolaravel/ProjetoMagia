<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Departamento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/estiloDepartamento.css')}}" rel="stylesheet">
</head>
<body id="departamento">
    <p>Cadastrar Departamento</p>
        <div class = "col-md-4">
            <form action="{{route('departamento.store')}}" method="POST">
             @csrf
                <div id="campos">
                    <label for="nome">Nome do Departamento</label>
                    <input class="form-control" type="text" id="nome" name="nomeDepartamento" size=30 >
                    <button id="botao" class="btn btn-outline-light" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
</body>
</html>