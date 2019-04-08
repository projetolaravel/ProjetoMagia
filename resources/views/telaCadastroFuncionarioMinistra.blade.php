<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Funcionário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/estiloCadastroFuncionario.css')}}" rel="stylesheet">
    <link href="{{asset('js/app.js')}}" rel="stylesheet">
</head>
<body id="cadastro">
    
        <div class = "row">
            <div class = "col-md-4"></div>
            <div class = "col-md-4">
            <form action="{{route('funcionariosM.store')}}" method="POST" enctype="multipart/form-data">  
                @csrf     
                <div class="campos">
                    <h1 >Cadastro de Funcionário</h1>
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" id="nome" name="nomeFuncionario" size=30
                    placeholder="Digite seu nome completo!">
                    <label for="sexo">Sexo</label>
                    <input class="form-control" type="text" id="endereco" name="nomeSexo" size=30>
                    <label for="endereco">Endereço</label>
                    <input class="form-control" type="text" id="endereco" name="nomeEndereco" size=30>
                    <label for="rub">RUB</label>
                    <input class="form-control" type="text" id="rub" name="nomeRub" size=30>
                    <label for="foto">Foto: </label>
                    <input class = "form-control-file" type="file" id="primaryImage"  name="nomeFoto" size=30>
                    <button id="botao" class="btn btn-outline-light" type="submit">Cadastrar</button>  
                </div>
            </form>
            </div>
            <div class = "col-md-4"></div>
        <div>
    </div>
</body>
</html>