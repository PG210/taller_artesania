@extends ('layouts.app')
@section('content')
<!--cuerpo-->

<div class="container">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src='{{url("/img/10.jpg")}}' class="d-block w-100 "  alt="...">
    </div>
    <div class="carousel-item">
      <img src='{{url("/img/12.jpg")}}' class="d-block w-100"  alt="...">
    </div>
    <div class="carousel-item">
      <img src='{{url("/img/13.jpg")}}' class="d-block w-100" alt="...">
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
</div>
</div>

<!--end-cuerpo-->

@stop
