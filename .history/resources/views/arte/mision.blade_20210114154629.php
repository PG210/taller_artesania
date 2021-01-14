<body background="../img/3.jpg" style="background-repeat: no-repeat;   background-size: cover;">
    @extends('layouts.app') @section('content')

    <!-- Card -->
    <div class="card">

        <!-- Card image -->
        <div class="view overlay">
            <img class="card-img-top" src="../img/8.jpg" alt="Card image cap">
            <a>
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>

        <!-- Button -->


        <!-- Card content -->
        <div class="card-body">

            <!-- Title -->
            <h4 class="card-title">HISTORIA DE ARTESANIAS DON PEDRO</h4>
            <hr>
            <!-- Text -->
            <p class="card-text">Artesania don Pedro inicio el 20 de abril de 1994 como el primer empresa de artesanias elaboradas a mano por personas campesinas de la region.Artesanias don pedro es la empresa de ventas de artesanias más vieja y famosa del municipio de sandona
                por sus buena calidad e productos que son realizados con productos naturales .Artesanias don Pdro pasó por muchos dueños durante toda su historia.</p>

        </div>

        <!-- Card footer -->
        <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
            <ul class="list-unstyled list-inline font-small">
                <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                class="far fa-comments pr-1"></i>12</a></li>
                <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1">
              </i>21</a></li>
                <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
            </ul>
        </div>

    </div>
    <!-- Card -->
    @stop
</body>