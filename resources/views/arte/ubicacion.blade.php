@extends('layouts.app')
@section('content')

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           
           <div class="alert alert-primary"  role="alert">
           <strong><h1>NUESTRA TIENDA "ARTESANIAS DON PEDRO"</h1></strong>
           Esta Ubicada en Sandona! Vistitanos Para Tener El Gusto De Atenderte.<br><br>
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
            </div>
           </div>
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.2029862025155!2d-77.47155207087359!3d1.2869160999413383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2ec92d598acc35%3A0x15ccc1de6ea8bce7!2zQ2wuIDQgIzA0NjQsIFNhbmRvbsOhLCBOYXJpw7Fv!5e0!3m2!1ses!2sco!4v1610740318050!5m2!1ses!2sco" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
            </div>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>VEN Y CONOCE NUESTROS PRODUCTOS.</strong> Artesanías Don Pedro pone a disposición de sus clientes su Tienda Virtual, una forma de realizar la compra de los productos de nuestros almacenes de manera rápida, segura y fácil.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <strong>CONOCE NUESTRA TIERRA SANDONA!</strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong><h1>SANDONA-NARIÑO</h1></strong>
      Sandoná es un municipio colombiano ubicado en el departamento de Nariño. Su cabecera municipal se sitúa sobre la meseta de Paltapamba, hoy meseta de Sandoná, a una altitud de 1848 metros sobre el nivel del mar, al pie de la cascada de Belén y a una distancia de 48 kilómetros de San Juan de Pasto, por la vía circunvalar del Galeras.<br>
      Una actividad importante en la economía de la zona son las artesanías tales como sombreros y accesorios creados con fibras naturales de una planta llamada iraca (Carludovica palmatta) también llamada paja toquilla por el parecido que encontraron los españoles a las Tocas en unos ornamentos usados por los indígenas durante la conquista y elaborados de este material. La elaboración de estos artículos artesanales en su mayoría se lleva a cabo por las mujeres, quienes realizan esta labor como una tarea adicional a sus actividades de amas de casa. Sus artesanías le han hecho famosa a nivel local, nacional y mundial. Son de tal calidad que en forma de accesorios estuvieron en desfiles de modas en Milán (Italia) en 2005 y actualmente gozan de un amplio reconocimiento y uso en las principales pasarelas nacionales e internacionales.<br><br>
           <div class="carousel-inner">
                <div class="carousel-item active">
                <img src='{{url("/img/cg/8.jpg")}}' alt="...">
                </div>
                <div class="carousel-item">
                <img src='{{url("/img/cg/9.jpg")}}' class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src='{{url("/img/cg/10.jpg")}}' class="d-block w-100" alt="...">
                </div>
            </div>
           </div>
           </div>
    </div>
  </div>
  
</div>

        
@stop