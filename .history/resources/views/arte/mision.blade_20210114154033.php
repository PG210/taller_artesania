<body>

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
          
            <hr class="hr-light">
            
           
            
                 <br>
            <!-- Link -->
            <a href="#!" class="white-text d-flex justify-content-end">
              <h5>Read more <i class="fas fa-angle-double-right"></i></h5>
            </a>
        
          </div>
        
        </div>
        <!-- Card Dark --></p>
  </div>



  <!--tarjeta dos vision-->
  <div class="col-lg-6"  style="background-color:#ccc">
   
    <p><!-- Card Dark -->
        <div class="card">
        
          <!-- Card image -->
          <div class="view overlay">
           <h4 class="card-title">Visión</h4>
            <hr class="hr-light">
          Artesanías Juanita, es una empresa que contribuye al mejoramiento integral de la actividad artesanal mediante el rescate y la preservación de los oficios y la tradición, promoviendo la competitividad apoyando a las microempresas y asociaciones artesanales de mujeres cabeza de familia mejorando la sostenibilidad de la actividad artesanal y el bienestar de los artesanos.
            <img class="card-img-top" src="../img/4.jpg"
              alt="Card image cap">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
        
          <!-- Card content -->
          <div class="card-body elegant-color white-text rounded-bottom">
        
            <!-- Social shares button -->
          
            <!-- Title -->
            <h4 class="card-title">Visión</h4>
            <hr class="hr-light">
            <!-- Text -->
          
            <!-- Link -->
            <a href="#!" class="white-text d-flex justify-content-end">
              <h5>Read more <i class="fas fa-angle-double-right"></i></h5>
            </a>
        
          </div>
        
        </div>
        <!-- Card Dark --></p>
  </div>
</div>
</div> 


 

</div> 
@stop

</body>