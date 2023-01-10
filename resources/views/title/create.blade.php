@extends('layouts.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title' , 'Locadora Videos - cadastrar')
</head>
<body>
    @section('content')

    <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nome</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-2">
          <label for="inputPassword4" class="form-label">Ano Lançamento</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-2">
            <label for="inputPassword4" class="form-label">Valor Locação</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
        <div class="col-2">
          <label for="inputAddress" class="form-label">Multa Atraso</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
                <div class="col-12">
            <a type="submit" class="btn btn-success" href="{{ route('client-create') }}">Cadastrar</a>
        </div>
      </form>


    @endsection

</body>
</html>


