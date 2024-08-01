<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>
      <nav class="navbar navbar-expand-lg fixed-top bg-danger">
        <div class="container">
          <a class="navbar-brand text-white fw-bold" href="/">Cursos Eventos</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/events/create">Criar eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/destaques">Destaque eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-info fw-bold" href="/palestrantes">Palestrantes</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
       <div class="container mt-5">
          <div class="row">

            @yield('content')

          </div>
      
       </div>
    </body>
</html>