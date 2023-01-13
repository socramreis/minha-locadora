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

    <form class="row g-3" method="POST" action="{{ route('client-store') }}">
        @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nome:</label>
          <input type="text" class="form-control" id="inputEmail" name ="name">
        </div>
        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">CPF / CNPJ</label>
          <input type="text" class="form-control" id="cpf">
        </div>
        <div class="col-md-2">
            <label for="inputPassword4" class="form-label">Data Nascimento</label>
            <input type="date" class="form-control" id="datanascimento">
          </div>
        <div class="col-4">
          <label for="inputAddress" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="col-2">
            <label for="inputAddress" class="form-label">Celular</label>
            <input type="tel" class="form-control" id="celular">
          </div>
          <div class="col-md-2">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep">
          </div>
        <div class="col-4">
          <label for="inputAddress3" class="form-label">Endereco</label>
          <input type="text" class="form-control" id="endereco" placeholder="Rua, Avenida">
        </div>
        <div class="col-2">
            <label for="inputAddress" class="form-label">Numero</label>
            <input type="text" class="form-control" id="numero">
        </div>
        <div class="col-3">
            <label for="inputAddress2" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro">
          </div>
          <div class="col-4">
            <label for="inputAddress2" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="complemento" placeholder="Proximo ao comercio de seu fulano">
          </div>
        <div class="col-md-2">
          <label for="inputCity" class="form-label">cidade</label>
          <input type="text" class="form-control" id="cidade">
        </div>
        <div class="col-md-1">
          <label for="inputState" class="form-label">UF</label>
          <select id="inputState" class="form-select">
            <option selected>Selecione...</option>
            <option>...</option>
          </select>
        </div>
        </div>
        <div class="col-12">
            <input type="submit" class="btn btn-success" name="submit">
        </div>
      </form>


    @endsection


    </body>
</html>



