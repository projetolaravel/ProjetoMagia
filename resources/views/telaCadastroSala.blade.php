<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Sala</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/estiloSala.css')}}" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body id="telasala">
    <center>
<h1 class="mensagem">Cadastro de Sala</h1></center> 
 
    <div class="col-md-4">
        <form>
            <div class="campos">
                <label for="nome">Nome da sala</label>
                <input class="form-control" type="text" id="nome" size=30>
                <label for="coordenador">Coordenador responsável</label>
                <input class="form-control" type="text" id="cordenador" size=30> 
                <label for="departamento">Departamento</label>
                <input class="form-control" type="text" id="salafuncionamento" size=30>  
                <button id="botao" type="button" class="btn btn-outline-light">Cadastrar</button>  
            </div>
        </form>
    <div>
    
</body>
</html>