@extends('layouts.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title' , 'Locadora Bicicleta - cadastrar')
</head>
<body>
    @section('content')

    <form class="row g-3" method="POST" action="{{ route ('bike-store') }}">
        @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Numero Serie</label>
          <input type="text" class="form-control" id="inputEmail4" name="nomebike">
        </div>
        <div class="col-md-2">
          <label for="inputPassword4" class="form-label">Ano Lançamento</label>
          <input type="text" class="form-control" id="inputPassword4" name="anobike">
        </div>
        <div class="col-md-2">
          <label for="inputPassword4" class="form-label">Cor</label>
          <input type="text" class="form-control" id="inputPassword4" name="anobike">
        </div>
        <div class="col-md-2">
          <label for="inputPassword4" class="form-label">Tamanho</label>
          <input type="text" class="form-control" id="inputPassword4" name="anobike">
        </div>
        <div class="col-md-2">
            <label for="inputPassword4" class="form-label">Valor Locação</label>
            <input type="text" class="form-control" id="inputPassword4" name="valorbike">
          </div>
        <div class="col-2">
          <label for="inputAddress" class="form-label">Multa Atraso R$</label>
          <input type="text" class="form-control" id="inputAddress" name="multabike">
        </div>
        <div class="col-2">
          <label for="inputAddress" class="form-label">Foto</label>
          <input type="text" class="form-control" id="inputAddress" name="multabike">
        </div>
        <div class="col-12">
        <input type="submit" class="btn btn-success" name="submit" value="Gravar">
        </div>
      </form>


    @endsection

</body>
</html>


