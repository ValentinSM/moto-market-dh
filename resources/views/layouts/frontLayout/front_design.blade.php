<!DOCTYPE html>
<html>

<head>
	<title>Moto  Market</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/styles-cart.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/stylesCatalog.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Neuton:800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

	{{-- Template Catalogo --}}

	{{-- Template Catalogo End --}}

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
</head>

<body>
	<div class="container">

    @include('layouts.frontLayout.front_header')

    @yield('content')

    @include('layouts.frontLayout.front_footer')

	</div>
	{{-- JS --}}
	<script type="text/javascript" src="{{ asset('js/frontend_js/functions.js') }}"></script>
	<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
</body>
</html>
