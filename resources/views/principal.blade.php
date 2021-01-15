<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Artesanias Don Pedro</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
           
        <!--navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ARTESANIAS DON PEDRO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                @if (Route::has('login'))
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                @auth
                @else
                     <a href="{{ route('login') }}" class="nav-link active" aria-current="page">Iniciar sesion</a>
                </li>
                     @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registro</a>
                </li>
                   
                                @endif
                            @endauth
                        </div>
                    @endif
                    
                    
                    <li class="nav-item">
                    <a class="nav-link" href="#">BIENVENIDOS!!!</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    SANDONA ES MI TIERRA CARAJO!
                </span>
                </div>
            </div>
            </nav>
        <!--end--navegation-->
        
<!--cuerpo-->

<div class="container">
<div class="container">
<br>
<div class="shadow-lg p-3 mb-5 bg-white rounded">Las mejores artesanias de Sandona para el mundo!</div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src='{{url("/img/cg/1.jpg")}}' class="rounded mx-auto d-block" class="d-block w-100 "  alt="...">
    </div>
    <div class="carousel-item">
      <img src='{{url("/img/cg/3.jpg")}}' class="rounded mx-auto d-block" class="d-block w-100"  alt="...">
    </div>
    <div class="carousel-item">
      <img src='{{url("/img/cg/2.jpg")}}' class="rounded mx-auto d-block" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div></div>
</div>

<!--end-cuerpo-->


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
