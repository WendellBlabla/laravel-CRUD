<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cursos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><strong> Cursos </strong></a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="">Visualizar</a>
      <a class="nav-item nav-link" href="{{route('course.create')}}">Cadastrar</a>
    </div>
  </div>
</nav>
<table class="table table-striped">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Escolaridade</th>
      <th scope="col" colspan="3">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($courses as $course)
    <tr>
        <th scope="row">{{$course->id}}</th>
        <td>{{$course->nome}}</td>
        <td>{{$course->escolaridade}}</td>
        <td>
        <a href="{{route('course.show', ['course' => $course->id])}}"><button class="btn btn-secondary">Ver</button></a>
        </td>
        <td>
        <a href="{{route('course.edit', ['course' => $course->id])}}"><button class="btn btn-primary">Atualizar</button></a>
        </td>
        <td>
        <form action="{{route('course.destroy', ['course' => $course->id])}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger">Deletar</button>
        </form>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>