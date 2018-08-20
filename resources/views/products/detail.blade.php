@extends('layouts.frontLayout.front_design')
@section('content')

  <div class="container">

<form name="addtocartForm" id="addtocartForm" action="{{ url('add-cart') }}" method="post">
  {{ csrf_field() }}
  <input type="hidden" name="product_id" value="{{ $productDetails->id }}">
  <input type="hidden" name="product_name" value="{{ $productDetails->product_name }}">
  <input type="hidden" name="product_code" value="{{ $productDetails->product_code }}">
  <input type="hidden" name="product_color" value="{{ $productDetails->product_color }}">
  <input type="hidden" name="price" value="{{ $productDetails->price }}">

	<div class="product">

			<div class="product-title">
				<h1>{{ $productDetails->product_name }}</h1>
			</div>

			<div class="product-ph">
				<img src="{{ asset('images/backend_images/products/large'). '/' . $productDetails->image }}">
			</div>
			<div class="buy-btn">
 <input type="submit" class="" value="COMPRAR">
</div>
			<div class="specs">
				<h2>DESCRIPCION</h2>
                                <div class="specs-details">
                                    <table class="vehicle-specs-content">
                                        <tbody class="">
                                                <tr>
                                                    <td>{{ $productDetails->description }}</td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>


                <div class="vehicle-specs-content-container">
                            <h2>ESPECIFICACIONES</h2>

                                <div class="specs-details">
                                    <table class="vehicle-specs-content">
                                        <tbody class="">
                                                <tr>
                                                    <td>Cilindrada</td>
                                                    <td>{{ $productDetails->engine_capacity }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Estilo</td>
                                                    <td>{{ $productDetails->style }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Marca</td>
                                                    <td>{{ $productDetails->brand }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Año</td>
                                                    <td>{{ $productDetails->year }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Color</td>
                                                    <td>{{ $productDetails->product_color }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Precio</td>
                                                    <td>{{ $productDetails->price }}</td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>

                        </div>


			</div>
</form>

	</div>

@endsection
