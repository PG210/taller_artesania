 @extends('layouts.app') @section('content')





<div class="container">

    <div class="row">

        <!--tarjeta 1 mision hotel-->
        <div class="col-lg-6" style="background-color:#ccc">

            <p>
                <!-- Card Dark -->
                <div class="card">

                    <!-- Card image -->
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

                </div>
                <!-- Card Dark -->
            </p>
        </div>



        <!--tarjeta dos vision-->
        <div class="col-lg-6" style="background-color:#ccc">

            <p>
                <!-- Card Dark -->
                <div class="card">

                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="../img/4.jpg" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body elegant-color white-text rounded-bottom">

                        <!-- Social shares button -->

                        <!-- Title -->
                        <h4 class="card-title">MISION</h4>
                        <hr class="hr-light">
                        <!-- Text -->
                        <p class="card-text white-text mb-4">
                            En el Hotel rivera del Mar tenemos como visión posicionarnos en el corto plazo y ser reconocido por nuestros clientes que son nuestra razón de existir, brindadores atención servicio y confort, logrando proporcionar una gran estadía en la ciudad. para
                            una placentera estadía en nuestras instalaciones. Somos un equipo humano comprometido y organizado para la excelencia en el servicio, el en crecimiento personal y en el desarrollo de nuestras habilidades para su bienestar.
                            Implementamos en la práctica cotidiana valores de responsabilidad en el desempeño de nuestros servicios, en el medio ambiente y en la comunidad con el fin de lograr una imagen de excelencia.
                        </p>
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