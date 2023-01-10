@extends('layouts.main')


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    @section('content')
        <div class ="col-6">
            <div class="col-10 mb-3">
                <label for="inputState" class="form-label">Cliente</label>
                <select id="inputState" class="form-select">
                <option selected>Selecione</option>
                <option>...</option>
                </select>
            </div>
        </div>
            <form class="row g-3">
                    <div class="col-5">
                        <label for="inputState" class="form-label">Titulo</label>
                        <select id="inputState" class="form-select">
                        <option selected>Selecione</option>
                        <option>...</option>
                        </select>
                    </div>
                <div class="col-md-2">
                <label for="inputPassword4" class="form-label">Data / Hora Saída</label>
                <input type="datetime-local" class="form-control" id="inputPassword4">
                </div>
                <div class="col-2">
                <label for="inputAddress" class="form-label">Previsão Retorno</label>
                <input type="datetime-local" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-1">
                <label for="inputAddress2" class="form-label" >Valor Diária</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-1">
                <label for="inputCity" class="form-label">Valor Total</label>
                <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-primary">Lançar</button>
                </div>
            </form>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Data Saída</th>
                    <th scope="col">Previsão Retorno</th>
                    <th scope="col">Data / Hora Retorno</th>
                    <th scope="col">Valor Locação</th>
                    <th scope="col">Ação</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <div class="row g-3">
                        <div class="col">
                        <input type="datetime-local" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                    </div>
                    </td>
                    <td>@mdo</td>
                    <td><button type="button" class="btn btn-secondary">Recebido</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>

                </tr>
                <tr>
                    <th scope="row"></th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
          </table>





          @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>


</html>
