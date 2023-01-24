<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-body-tertiary">

    @yield('header')
        <a class="btn btn-primary" href= "{{ route('dashboard')}}" role="button">Dashboard</a>
        <a class="btn btn-primary" href= "{{ route('client-list')}}" role="button">Clientes</a>
        <a class="btn btn-primary" href= "{{ route('bike-list')}}" role="button">Bicicletas</a>
        <a class="btn btn-primary" href= "{{ route('rent-list')}}" role="button">Locação</a>

    @yield('content')
    <div class="position-absolute bottom-0 start-50 translate-middle-x">
            <footer class="bg-light text-center">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                </div>
            </footer>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
