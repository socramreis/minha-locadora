@extends('layouts.main')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('header')

@section('title' , 'Locadora Videos - Clientes')


@section('content')
<div class = "mt-4">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="list">Clientes</li>
        </ol>
    </nav>
</div>
<div class = "mb-4">
    <a type="submit" class="btn btn-success" href="{{ route('client-create') }}">Cadastrar Novo</a>
</div>


<table class="table table-striped" style="mb-6 ">

    <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">CPF</th>
          <th scope="col">E-mail</th>
          <th scope="col">Celular</th>
        </tr>
    </thead>
        <tr>
            @foreach ($client as $client)
                <th> {{$client->idclient}} </th>
                <th> {{$client->name}}</th>
                <th> {{$client->cpf}}</th>
                <th> {{$client->email}}</th>
                <th> {{$client->celular}}</th>

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




