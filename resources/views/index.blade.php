@extends('layouts.frontLayout.front_design')
@section('content')

  <!-- Banner -->
  <div class="banner-sm">
    <img class="banner-img" src="{{ asset('images/frontend_images/carretera.jpg') }}" alt="carretera">
    <div class="titulo-banner">Nuevos Modelos Disponibles</div>
  </div>

  <div class="banner-lg">
    <img class="banner-img" src="{{ asset('images/frontend_images/carretera-lg.jpg') }}" alt="carretera">
    <div class="titulo-banner">Nuevos Modelos Disponibles</div>
  </div>
  <!-- Banner End -->

  <!-- Productos -->
  <div class="productos-total">

    <div class="productos-g">
        <a href="#"><img class="foto-moto" src="{{ asset('images/frontend_images/moto1.jpeg') }}" alt="moto"></a>
      <div class="caja-articulo">
        <h2 class="texto-articulo"><a class="links" href="#">Victory Hammer SUPERLOW</a></h2>
        <a class="ic-flecha" href="#"><img class="flecha" src="{{ asset('images/frontend_images/ic-flecha.png') }}" alt="flecha icono"></a>
      </div>
    </div>

    <div class="productos-g">
        <a href="#"><img class="foto-moto" src="{{ asset('images/frontend_images/moto2.jpeg') }}" alt="moto"></a>
      <div class="caja-articulo">
        <h2 class="texto-articulo"><a class="links" href="#">Kawasaki Ninja</a></h2>
        <a class="ic-flecha" href="#"><img class="flecha" src="{{ asset('images/frontend_images/ic-flecha.png')}}" alt="flecha icono"></a>
      </div>
    </div>

    <div class="productos-g">
        <a href="#"><img class="foto-moto" src="{{ asset('images/frontend_images/moto3.jpeg') }}" alt="moto"></a>
      <div class="caja-articulo">
        <h2 class="texto-articulo"><a class="links" href="#">Safiro Street310</a></h2>
        <a class="ic-flecha" href="#"><img class="flecha" src="{{ asset('images/frontend_images/ic-flecha.png') }}" alt="flecha icono"></a>
      </div>
    </div>

    <div class="productos-g">
        <a href="#"><img class="foto-moto" src="{{ asset('images/frontend_images/moto4.jpeg') }}" alt="moto"></a>
      <div class="caja-articulo">
        <h2 class="texto-articulo"><a class="links" href="#">BMW Warrior MO</a></h2>
        <a class="ic-flecha" href="#"><img class="flecha" src="{{ asset('images/frontend_images/ic-flecha.png') }}" alt="flecha icono"></a>
      </div>
    </div>


  </div>
  <!-- Productos End -->

@endsection
