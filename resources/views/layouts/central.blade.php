<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Laracloak</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    @stack('stylesheets')
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Laracloak</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link {{ \Route::currentRouteName() == 'central.index' ? 'active' : '' }}" aria-current="page" href="{{ route('central.index') }}">Home</a>
        <a class="nav-link {{ \Route::currentRouteName() == 'central.register' ? 'active' : '' }}" href="{{ route('central.register') }}">Register</a>
        <a class="nav-link {{ \Route::currentRouteName() == 'central.contact' ? 'active' : '' }}" href="{{ route('central.contact') }}">Contact</a>
      </nav>
    </div>
  </header>

  {{ $slot }}


    
  </body>
</html>
