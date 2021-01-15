<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Artesanias Don Pedro') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
       
    </head>
  
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Artesanias Don Pedro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Quien somos..
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{url('/arte/mision')}}">Mision</a></li>
            <li><a class="dropdown-item" href="{{url('/arte/vision')}}">Vision</a></li>
            <li><a class="dropdown-item" href="{{url('/arte/ubicacion')}}">Ubicacion</a></li>
            <li><a class="dropdown-item" href="{{url('/arte/historia')}}">Historia</a></li>           
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{url('/productos')}}">Sombreros</a></li>
            <li><a class="dropdown-item" href="#">Mochilas</a></li>
            <li><a class="dropdown-item" href="#">Tejidos</a></li>
            <li><a class="dropdown-item" href="#">Visuterias</a></li>
            <li><a class="dropdown-item" href="#">Ofertas</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/comentarios')}}">comentarios</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
<br>       
            <!-- Page Heading -->
            <div class="container">
           @yield('content')
           </div>
        </div>
<!--footer-->
<br>
        <footer class="bg-dark text-white text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Ubicacion y Horario de Atencion</h5>

        <p>
        <bFooterr>
        Cll 4 No. 5 – 58<br>
        Barrio Las Aguas, Sandona, Nariño-Colombia
        Lunes a viernes 8:00 Am - 11:00 Pm
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Encuentranos en</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-white">FACEBOOK</a>
          </li>
          <li>
            <a href="#!" class="text-white">INSTAGRAM</a>
          </li>
          <li>
            <a href="#!" class="text-white">TWITER</a>
          </li>
          <li>
            <a href="#!" class="text-white">PINTEREST</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">TELEFONOS</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white">+57 317 8916679</a>
          </li>
          <li>
            <a href="#!" class="text-white">+57 302 3553984</a>
          </li>
          <li>
            <a href="#!" class="text-white">+57 318 4409594</a>
          </li>
         
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!--end footer-->

        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
       <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
