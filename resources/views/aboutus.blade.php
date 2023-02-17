@extends('layouts.app')

@section('content')
<div class="container border-0 mb-5">
    <H1>У нас самые лучшие игры и девайсы!</H1>
    <!-- Лозунг -->
</div>
<div class="container border mt-1">
    
    <h1>Новинки в магазине!</h1> 
    <!-- Переключаемый слайдер -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="scaleimage" src="{{ url('/img/bf2042.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="scaleimage" src="{{ url('/img/xbox.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="scaleimage" src="{{ url('/img/ps.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="scaleimage" src="{{ url('/img/nintendoswitch.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/img/ps5.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
@endsection