@extends('layouts.app')

@section('content')
<!-- Страница где нас найти -->
<div class="container">
    <h1>Наш офис находится по адресу: г.Омск,ул.Пушкина,43</h1>
    <img  src="{{ url('/img/map.jpg') }}" width="85%" alt="">
    <h4>Позвонить нам: <a href="tel:79136012801">+79136012801</a></a></h4>
    <h4>Написать нам: <a href = "mailto: denisgrebenyuk@example.com">denisgrebenyuk@example.com</a></h4>
</div>
@endsection