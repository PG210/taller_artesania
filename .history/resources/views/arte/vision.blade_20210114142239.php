    @extends('layouts.app') 
    @section('content')
    <body background='{{url("/img/3.jpg")}}' style="background-repeat: no-repeat;   background-size: cover;">

    <div class="container">

        <div class="row">

            <!--tarjeta 1-->

            <div class="col-lg-6">
                
                    <!-- Card Dark -->
                    <div class="card" style=" background-color: rgba(230, 179, 179, 0.5)">

                        <!-- Card image -->
                        <div class="view overlay" style=" background-color: rgba(230, 179, 179, 0.5)">
                            <img class="card-img-top" src='{{url("/img/6.jpg")}}' width="10px" alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body elegant-color white-text rounded-bottom">

                            <!-- Social shares button -->

                            <!-- Title -->
                            <h4 class="card-title">Vision</h4>
                            <hr class="hr-light">
                            <!-- Text -->
                            <p class="card-text white-text mb-4">
                                Artesanías Juanita en el 2025, será la entidad que lidere el fortalecimiento de la actividad artesanal, contribuyendo al desarrollo local, regional y a la preservación de la cultura y la tradición en el municipio de Sandona.

                            </p>
                            <!-- Link -->
                            <a href="#!" class="white-text d-flex justify-content-end">
                                <h5>Read more <i class="fas fa-angle-double-right"></i></h5>
                            </a>

                        </div>

                    </div>
                    <!-- Card Dark -->
              
            </div>
            <!--tarjeta 1-->

            <div class="col-lg-6">

                
                    <!-- Card Dark -->
                    <div class="card " style=" background-color: rgba(230, 179, 179, 0.5) ">

                        <!-- Card image -->
                        <div class="container">
                        <br>
                        <div class="view overlay " >
                                <video loop="true " muted autoplay width="530 " height="300 ">
                                <source src='{{url("/img/video.mp4")}}' type="video/mp4 " alt="Card image cap "> 
                            <a>
                                <div class="mask " style=" background-color: rgba(230, 179, 179, 0.5) "></div>
                            </a>
                        </div>
                        </div>
                        <!-- Card content -->
                        <div class="card-body elegant-color white-text rounded-bottom ">

                            <!-- Social shares button -->

                            <!-- Title -->
                          <br>
                            <hr class="hr-light ">
                            <!-- Text -->
                            <p class="card-text white-text mb-4 ">

                                <div class="view overlay " style=" background-color: rgba(230, 179, 179, 0.5) ">
                                    <img class="card-img-top " src='{{url("/img/8.jpg")}}' alt="Card image cap " width="530 " height="560>
                <a>
                    <div class="mask rgba-white-slight">
                    </div>
                </a>
            </div>
            
            <!-- Link -->
            <a href="#! " class="white-text d-flex justify-content-end ">
                <h5>Read more <i class="fas fa-angle-double-right "></i></h5>
            </a>

        </div>

    </div>
    <!-- Card Dark -->
    </p>
    </div>
    </div>
    </body>
    @stop

