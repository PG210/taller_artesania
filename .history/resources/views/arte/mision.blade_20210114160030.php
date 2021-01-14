 @extends('layouts.app') @section('content')

<!-- Card -->
<div class="card">

    <!-- Card image -->
    <div class="container">


        <div class="row">

            <!--tarjeta 1-->

            <div class="col-lg-6">
                <br>
                <div class="view overlay ">
                    <video loop="true " muted autoplay width="530 " height="300 ">
                    <source src='{{url("/img/video.mp4")}}' type="video/mp4 " alt="Card image cap ">
                         
                <a>
                    <div class="mask " style=" background-color: rgba(230, 179, 179, 0.5) "></div>
                </a>
            </div>
            
            </div>
            <div class="col-lg-6">
                <img class="card-img-top" src={{url("/img/6.jpg")}} alt="Card image cap">

            </div>
            </div>
    </div>
</div>


        <!-- Button -->


        <!-- Card content -->
        <div class="card-body">

            <!-- Title -->
            <h4 class="card-title">MISION</h4>
            <hr>
            <!-- Text -->
            
            Artesanías Juanita, es una empresa que contribuye al mejoramiento integral de la actividad artesanal mediante el rescate y la preservación de los oficios y la tradición, promoviendo la competitividad apoyando a las microempresas y asociaciones artesanales de mujeres cabeza de familia mejorando la sostenibilidad de la actividad artesanal y el bienestar de los artesanos.
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