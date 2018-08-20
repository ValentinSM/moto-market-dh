@extends('layouts.frontLayout.front_design')
@section('content')

  <section>
  	<div>
  		<h1 class="title">Ingresa a tu cuenta</h1>
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

  	<form class="formulario" action="{{ url('signin') }}" method="post">
      {{ csrf_field() }}

  		<div class="datos-input">
  			<p class="campos-relleno">Email:</p>
  			<input class="input-usuario" type="email" name="email" required><br>
  		</div>

  		<div class="datos-input">
  			<p class="campos-relleno">Contraseña:</p>
  			<input class="input-contrasena" type="password" name="password" required><br>
  		</div>

  		<div class="caja-boton-enviar">
  			<input class="boton-enviar" type="submit" name="enviar-formulario" value="Ingresar">
  		</div>

  		<div class="unico-checkbox">
  			<input type="checkbox" name="terminos-y-condiciones">Recordar mi cuenta
  		</div>

  		<div>
  			<p class="unico-checkbox">¿No tienes cuenta? <a style='color: grey;' href="registro.php">Creá tu cuenta ahora</a></p>
  		</div>

  	</form>

  </section>

@endsection
