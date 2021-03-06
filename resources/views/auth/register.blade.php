<link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}">ARTESANIAS DON PEDRO</a>
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
                    
                </ul>
                </div>
            </div>
            </nav>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
           
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <strong><h1 align="center">CREA TU CUENTA EN NUESTRA TIENDA VIRTUAL "DON PEDRO" </h1></strong><br>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src='{{url("/img/cg/5.jpg")}}' alt="...">
                </div>
                <div class="carousel-item">
                <img src='{{url("/img/cg/6.jpg")}}' class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src='{{url("/img/cg/7.jpg")}}' class="d-block w-100" alt="...">
                </div>
            </div><br>
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Ingrese su Nombre')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Ingrese su Correo Electronico')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Ingrese Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirme su Contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya Estoy Registrado?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('REGISTRAR') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

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
    <a class="text-white" href="https://mdbootstrap.com/">propietarios@gmail.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!--end footer-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>