<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Salas</title>
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
      <th scope="col">Nome</th>
      <th scope="col">Id Departamento</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody id="back2">
    @foreach($sala as $sal)
        <tr>       
            <td>{{$sal->nome}}</td>
            <td>{{$sal->departamento_id}}</td>
            <td>
            <form action = "{{route('salaC.destroy', $sal)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('salaC.edit', $sal)}}">Editar</a>
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