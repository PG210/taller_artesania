 @extends('layouts.app') @section('content')





<div class="container">

    <div class="row">

        <!--tarjeta 1 mision hotel-->
        <div class="col-lg-6" style="background-color:rgb(252, 250, 250)">

            <p>
                <!-- Card Dark -->

                <div class="card">

                    <h4 class="card-title">ARTESANIAS SANDONA</h4>
                    <!-- Card image -->
                    <hr class="hr-light">
                    <hr class="hr-light">


                    <div class="container">
                        <br>
                        <div class="view overlay ">
                            <video loop="true " muted autoplay width="530 " height="300 ">
                                <source src='{{url("/img/video.mp4")}}' type="video/mp4 " alt="Card image cap "> 
                            <a>
                                <div class="mask " style=" background-color: rgba(230, 179, 179, 0.5) "></div>
                            </a>
                        </div>
                        </div>


                    <!-- Card content -->
                    <div class="card-body elegant-color white-text rounded-bottom">

                        <!-- Social shares button -->

                        <!-- Title -->
                        <h4 class="card-title"></h4>
                        <hr class="hr-light">
                        <hr class="hr-light">
                        <br>
                        <hr class="hr-light">
                        <br>
                       
                        <div class="view overlay">
                            <img class="card-img-top" src="../img/4.jpg" alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>


                         
                        <!-- Link -->
                        <a href="#!" class="white-text d-flex justify-content-end">
                            <h5>Read more <i class="fas fa-angle-double-right"></i></h5>
                        </a>

                    </div>
                    <hr class="hr-light">
                    <hr class="hr-light">
                    <br>
                    <hr class="hr-light">
                    <hr class="hr-light">
                    <br>
                    <hr class="hr-light">
                    <hr class="hr-light">

                </div>
                <!-- Card Dark -->
            </p>
        </div>



        <!--tarjeta dos vision-->
        <div class="col-lg-6" style="background-color:rgb(253, 252, 252)">

            <p>
                <!-- Card Dark -->
                <div class="card">

                    <h4 class="card-title">VISION</h4>
                        <hr class="hr-light">
                        <hr class="hr-light">
                        <br>
                       Visión 
                          Artesanías Juanita en el 2025, será la entidad que lidere el fortalecimiento de la actividad artesanal, contribuyendo al desarrollo local, regional y a la preservación de la cultura y la tradición en el municipio de Sandona.


                    <!-- Card content -->
                    <div class="card-body elegant-color white-text rounded-bottom">

                        <!-- Social shares button -->

                        <!-- Title -->
                        <h4 class="card-title"></h4>
                        <hr class="hr-light">
                        <hr class="hr-light">
                        <br>
                        
                        <hr class="hr-light">
                        <br>
                        <hr class="hr-light">
                        <div class="view overlay">
                            <img class="card-img-top" src="../img/8.jpg" alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>


                        <!-- Link -->
                        <a href="#!" class="white-text d-flex justify-content-end">
                            <h5>Read more <i class="fas fa-angle-double-right"></i></h5>
                        </a>

                    </div>

                </div>
                <!-- Card Dark -->
            </p>
        </div>
    </div>
</div>




</div>
@stop