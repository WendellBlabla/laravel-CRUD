<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
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
      <a class="nav-item nav-link" href="{{route('course.index')}}">Visualizar</a>
      <a class="nav-item nav-link" href="">Cadastrar</a>
    </div>
  </div>
</nav>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2"></div>
            <div class="col-md-auto" style="padding-top: 3em">
            <form action="{{route('course.store')}}" method="post">
            @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Horas</label>
                    <input type="number" class="form-control" name="horas">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Escolaridade</label>
                    <input type="text" class="form-control" name="escolaridade">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Série</label>
                    <input type="number" class="form-control" name="serie">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>
                </form>
            </div>
            <div class="col col-lg-2"></div>
        </div>
    </div>
</body>
</html>