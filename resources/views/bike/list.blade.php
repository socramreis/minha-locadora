@extends('layouts.main')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('header')

@section('title' , 'Locadora Bicicleta -- Titulos')


@section('content')
<div class = "mt-4">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="list">Titulos</li>
        </ol>
    </nav>
</div>
<div class = "mb-4">
    <a type="submit" class="btn btn-success" href="{{ route('bike-create') }}">Cadastrar Novo</a>
</div>


<table class="table table-striped" style="mb-6">

    <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Nome Titulo</th>
          <th scope="col">Ano Lançamento</th>
          <th scope="col">Valor Locação</th>
        </tr>
    </thead>
    <tbody>
        <tr>
           @foreach ( $bike as $bike)
                <th> {{$bike->idbike}} </th>
                <th> {{$bike->nomebike}}</th>
                <th> {{$bike->anobike}}</th>
                <th> {{$bike->valorbike}}</th>
           @endforeach
        </tr>
    </tbody>
</table>

<div class="input-group mb-2">
    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    <button type="button" class="btn btn-success">Pesquisar</button>

  </div>


@endsection



