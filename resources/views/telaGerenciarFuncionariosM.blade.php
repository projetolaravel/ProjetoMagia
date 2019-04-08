<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Funcionário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/estiloMembros.css')}}" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body id="telaMembros">
<table class="table table-striped">
  <thead id="back">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Sexo</th>
      <th scope="col">Endereço</th>
      <th scope="col">RUB</th>
      <th scope="col">Foto</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody id="back2">
    @foreach($funcionarios as $fun)
        <tr>       
            <td>{{$fun->id}}</td>
            <td>{{$fun->nome}}</td>
            <td>{{$fun->sexo}}</td>
            <td>{{$fun->endereco}}</td>
            <td>{{$fun->rub}}</td>
            <td id="foto"><img src="../storage/{{$fun->foto}}" width="50" height="80"/></td>
            <td>
            <form action = "{{route('funcionariosM.destroy', $fun)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('funcionariosM.edit', $fun)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
            
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>