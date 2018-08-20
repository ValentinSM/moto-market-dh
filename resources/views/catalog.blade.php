@extends('layouts.frontLayout.front_design')
@section('content')
	<div class="container">


	<div class="catalog">


			<section class="categories">
					@foreach ($categoriesAll as $cat)
						<label>{{$cat->name}}</label>
						<ul>
							@foreach ($subCategories as $subcat)
								@if ($subcat->parent_id == $cat->id)
									<li><a style="text-decoration: none;" href="{{ url('/catalog'). '/' . $subcat->url }}" >{{ $subcat->name }}</a></li>

								@endif

							@endforeach

						</ul>

						<hr>
					@endforeach




				{{-- <label>Cilindrada</label>
				<ul>
					<li>Categoria</li>
					<li>Categoria</li>
					<li>Categoria</li>
					<li>Categoria</li>
					<li>Categoria</li>
				</ul>
				<hr>
				<label>Precio</label>
				<ul>
					<li>Categoria</li>
					<li>Categoria</li>
					<li>Categoria</li>
					<li>Categoria</li>
					<li>Categoria</li>
				</ul> --}}
			</section>
			<section class="products">

			  <!-- It's likely you'll need to link the card somewhere. You could add a button in the info, link the titles, or even wrap the entire card in an <a href="..."> -->

        @foreach ($productsAll as $product)

          <div class="product-card">
            <div class="product-image">
              <a href="{{ url('/product') . '/' . $product->id }}"><img src="{{ asset('images/backend_images/products/medium/'.$product->image) }}">
                <div class="overlay">
                  <div class="text">+info</div>
                </a>
              </div>
            </div>

            <div class="product-info">
              <h5 class="texto-articulo">{{ $product->product_name }}</h5>
              <h4>${{ $product->price }}</h4>
							<h5 class="texto-articulo"><a href="carro.php">Agregar al carrito</a></h5>
            </div>

          </div>

        @endforeach



			  {{-- <div class="product-card">
			    <div class="product-image">
			     <a href="product.php"><img src="{{asset('images/frontend_images/moto2.jpeg')}}">
				      	<div class="overlay">
				      		<div class="text">+info</div>
				  	</a>
				</div>
			</div>
			    <div class="product-info">
				<h5 class="texto-articulo">Kawasaki Ninja</h5>
				<h4>$99.99</h4>
			<h5 class="texto-articulo"><a href="carro.php">Comprar</a></h5>
			</div>
			  </div>

			  <div class="product-card">
			    <div class="product-image">
			     <a href="product.php"><img src="{{asset('images/frontend_images/moto3.jpeg')}}">
				      	<div class="overlay">
				      		<div class="text">+info</div>
				  	</a>
				</div>
			</div>
			    <div class="product-info">
				<h5 class="texto-articulo">Otra Moto</h5>
				<h4>$99.99</h4>
			<h5 class="texto-articulo"><a href="carro.php">Comprar</a></h5>
			</div>
			  </div>

			 <div class="product-card">
			    <div class="product-image">
			     <a href="product.php"><img src="{{asset('images/frontend_images/moto2.jpeg')}}">
				      	<div class="overlay">
				      		<div class="text">+info</div>
				  	</a>
				</div>
			</div>
			    <div class="product-info">
				<h5 class="texto-articulo">Otra Moto</h5>
				<h4>$99.99</h4>
			<h5 class="texto-articulo"><a href="carro.php">Comprar</a></h5>
			</div>
			  </div>

			 <div class="product-card">
			    <div class="product-image">
			     <a href="product.php"><img src="{{asset('images/frontend_images/moto4.jpeg')}}">
				      	<div class="overlay">
				      		<div class="text">+info</div>
				  	</a>
				</div>
			</div>
			    <div class="product-info">
				<h5 class="texto-articulo">Kawasaki Ninja</h5>
				<h4>$99.99</h4>
			<h5 class="texto-articulo"><a href="carro.php">Comprar</a></h5>
			</div>
			  </div> --}}


			</section>


		</div>

	</div>
@endsection
