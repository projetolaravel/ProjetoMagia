<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Coordenador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/estiloCadastroCoordenador.css')}}" rel="stylesheet">
    <link href="{{asset('js/app.js')}}" rel="stylesheet">
</head>
<body id="cadastro">
    
        <div class = "row">
            <div class = "col-md-4"></div>
            <div class = "col-md-4">
            <form>       
                <div class="campos">
                    <h1 >Cadastro de Coordenador</h1>
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" id="nome" size=30
                    placeholder="Digite seu nome completo!">
                    <div class="sexo">
                    <label for="inputSexo">Sexo</label>
                    <select id="inputSexo" class="form-control">
                     <option selected>Escolha...</option>
                    <option>Masculino</option>
                     <option>Feminino</option>
                     </select>
                      </div>
                    <label for="endereco">Endereço</label>
                    <input class="form-control" type="text" id="endereco"  size=30>
                    <label for="rub">RUB</label>
                    <input class="form-control" type="text" id="rub" size=30>
                    <label for="nick">nickname</label>
                    <input class="form-control" type="text" id="nickname" size=30
                    placeholder="Pode ser aquele apelido da faculdade!">
                    <label for="senha">Senha</label>
                  <input class="form-control" type="password" id="senha" size=40>
                    <label for="foto">Foto: </label>
                    <input class = "espaco" type="file" id="foto"  size=30>
                    <button id="botao" class="btn btn-outline-light" type="submit">Cadastrar</button>  
                </div>
            </form>
            </div>
            <div class = "col-md-4"></div>
        <div>
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>