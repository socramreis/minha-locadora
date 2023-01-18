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

    <form class="row g-3" method="POST" action="{{ route('title-store') }}">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nome</label>
          <input type="text" class="form-control" id="inputEmail4" name="nometitle">
        </div>
        <div class="col-md-2">
          <label for="inputPassword4" class="form-label">Ano Lançamento</label>
          <input type="text" class="form-control" id="inputPassword4" name="anotitle">
        </div>
        <div class="col-md-2">
            <label for="inputPassword4" class="form-label">Valor Locação</label>
            <input type="password" class="form-control" id="inputPassword4" name="valortitle">
          </div>
        <div class="col-2">
          <label for="inputAddress" class="form-label">Multa Atraso R$</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="multatitle">
        </div>
        <div class="col-12">
        <input type="submit" class="btn btn-success" name="submit" value="Gravar">
        </div>
      </form>


    @endsection

</body>
</html>


