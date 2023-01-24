@extends('layouts.main')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('header')

@section('title' , 'Locadora Bicicleta -- Locação')


@section('content')
<div class = "mt-4">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="list">Locação</li>
        </ol>
    </nav>
</div>
<div class = "mb-4">
    <a type="submit" class="btn btn-success" href="{{ route('rent-create') }}">Cadastrar Novo</a>
</div>


<table class="table table-striped" style="mb-6 ">

    <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Status</th>
          <th scope="col">Cliente</th>
          <th scope="col">Titulo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
    </tr>
</tbody>
</table>

<div class="input-group mb-2">
    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    <button type="button" class="btn btn-success">Pesquisar</button>

  </div>


@endsection




