@extends('layouts.frontLayout.front_design')
@section('content')


<section>

  <div>
  	<h1 class="title">Registrate en MotoMarket</h1>
  </div>

  @if(Session::has('flash_message_error'))
      <div style='color: white;'>
        <strong>{!! session('flash_message_error') !!}</strong>
      </div>
  @endif

  @if(Session::has('flash_message_success'))
      <div>
        <strong>{!! session('flash_message_success') !!}</strong>
      </div>
      <br>
      <br>
  @endif

  	<form class="formulario" action="{{ url('signup') }}" method="post">
      {{ csrf_field() }}

  		<div class="datos-input">
  			<p class="campos-relleno">Nombre:</p>
  			<input class="input-nombre" type="text" name="name" ><br>
  		</div>

  		<div>
  			<p class="campos-relleno">Email:</p>
  			<input class="input-email" type="email" name="email"  ><br>
  		</div>

  		<div class="datos-input">
  			<p class="campos-relleno">Contraseña:</p>
  			<input class="input-contrasena" type="password" name="password"  ><br>
  		</div>

  		<div class="datos-input">
  			<p class="campos-relleno">Confirmar contraseña:</p>
  			<input class="input-confirm-contrasena" type="password" name="chkPwd"  ><br>
  		</div>

  			<input type="hidden" name="_token" value="{{ csrf_token() }}" ><br>

  		<div class="unico-checkbox">
  			<input type="checkbox" name="terminos-y-condiciones" required=""> He leido y acepto los <a style="color: grey;" href=""> términos y condiciones legales de MotoMarket </a><br>
  		</div>

  		<div class="caja-boton-enviar">
  			<input class="boton-enviar" type="submit" name="enviar-formulario" value="Registrarse">
  		</div>

    </form>

  		<div>
  			<p class="unico-checkbox">¿Ya estas registrado? <a href={{ url('/signin') }}>Inicia sesión</a></p>
  		</div>

  </section>



@endsection
