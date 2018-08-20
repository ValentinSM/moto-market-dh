{{-- Header --}}

		<header class="header-container">
			<nav class="main">
				<div class="logo">
					<img src="{{ asset('images/frontend_images/logo.png') }}">

				</div>
					<a href="{{ url('/') }}">Home</a>
					<a href="{{ url('/catalog') }}">Catalogo</a>
					<a href="{{ url('/faq') }}">Preguntas Frecuentes</a>
			</nav>

			@if (isset(Auth::user()->email))
				{{-- Aca va iconito y Hola, user! --}}
				<h3>Hola, {{ Auth::user()->name }}!</h3>
				@if ( Auth::user()->admin == 1 )
					<a style="text-decoration: none;" href="{{ url('/admin/dashboard') }}">Admin Panel</a>

				@endif
				<a style="text-decoration: none;" href="{{ url('/logoutuser') }}">Logout</a>

			@else
				<div class="login-register">
					<a href="{{ url('/signin') }}">Iniciar Sesión</a>  <a href="{{ url('/signup') }}">Registrarse</a>
				</div>
			@endif

		</header>
  {{-- Header End --}}
