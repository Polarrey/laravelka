@extends('layouts.app')

@section('content')
<!-- Каталог без бэкенда -->
<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Товары</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100  text-white bg-dark rounded-5 shadow-lg" style="background-image: url('img/bf2042.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Battlefield 2042</h2>
            <ul class="text-white d-flex list-unstyled mt-auto">
                <h3>30$,Sweden, 2020</h3>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
      <div class="card card-cover h-100  text-black bg-dark rounded-5 shadow-lg" style="background-image: url('img/nintendoswitch.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-black text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Nintendo Switch </h2>
            <ul class="text-black d-flex list-unstyled mt-auto">
                <h3>400$,Japan, 2017</h3>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
      <div class="card card-cover h-100  text-black bg-dark rounded-5 shadow-lg" style="background-image: url('img/tera.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Terraria </h2>
            <ul class="text-white d-flex list-unstyled mt-auto">
                <h3>10$,Sweden, 2013</h3>
            </ul>
          </div>
        </div>
    </div>
    <div class="col">
      <div class="card card-cover h-100  text-white bg-dark rounded-5 shadow-lg" style="background-image: url('img/xboxold.jfif');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Xbox One </h2>
            <ul class="text-white d-flex list-unstyled mt-auto">
                <h3>260$,United States, 2014</h3>
            </ul>
          </div>   
        </div>
    </div>
    <div class="col">
      <div class="card card-cover h-100  text-black bg-dark rounded-5 shadow-lg" style="background-image: url('img/ps.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-black text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Playstation</h2>
            <ul class="text-black d-flex list-unstyled mt-auto">
                <h3>200$,Japan, 2019</h3>
            </ul>
          </div>
        </div>
    </div>
    <div class="col">
      <div class="card card-cover h-100  text-black bg-dark rounded-5 shadow-lg" style="background-image: url('img/roblox.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Roblox </h2>
            <ul class="text-white d-flex list-unstyled mt-auto">
                <h3>Free game,Dunker, 2005</h3>
            </ul>
          </div>
        </div>
    </div>
  </div>
  @endsection