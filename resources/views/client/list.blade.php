@extends('layouts.main')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('header')

@section('title' , 'Locadora Bicicleta -- Clientes')


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
          <th scope="col">Editar</th>
          
        </tr>
    </thead>
        <tr>
            @foreach ($client as $client)
                <th> {{$client->idclient}} </th>
                <th> {{$client->name}}</th>
                <th> {{$client->cpf}}</th>
                <th> {{$client->email}}</th>
                <th> {{$client->celular}}</th>
                <th> 
                  <a href="#" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>  
                  </a></th>


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




