@extends('layouts.adminLayout.admin_design')
@section('content')

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">
        Productos</a> <a href="#" class="current">Ver Productos</a> </div>
      <h1>Productos</h1>

      @if(Session::has('flash_message_error'))
          <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! session('flash_message_error') !!}</strong>
          </div>
      @endif

      @if(Session::has('flash_message_success'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! session('flash_message_success') !!}</strong>
          </div>
      @endif

    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>Ver Productos</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>ID Producto</th>
                    <th>ID Categoria</th>
                    <th>Nombre de la Categoria</th>
                    <th>Nombre del Producto</th>
                    <th>Codigo del Producto</th>
                    <th>Color del Producto</th>
                    <th>Marca</th>
                    <th>Cilindrada</th>
                    <th>Estilo</th>
                    <th>Año</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                    <tr class="gradeX">
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->category_id }}</td>
                      <td>{{ $product->category_name }}</td>
                      <td>{{ $product->product_name }}</td>
                      <td>{{ $product->product_code }}</td>
                      <td>{{ $product->product_color }}</td>
                      <td>{{ $product->brand }}</td>
                      <td>{{ $product->engine_capacity }}</td>
                      <td>{{ $product->style }}</td>
                      <td>{{ $product->year }}</td>
                      <td>{{ $product->price }}</td>
                      <td>
                        @if (!empty($product->image))
                          <img src="{{ asset('/images/backend_images/products/small/'.$product->image)}}" style="width: 60px;">
                        @endif
                      </td>
                      <td class="center">
                        <a href="#myModal{{ $product->id }}" data-toggle="modal" class="btn btn-success btn-mini">
                          Ver</a>
                        <a href="{{ url('/admin/edit-product/' . $product->id ) }}" class="btn btn-primary btn-mini">
                          Editar</a>
                        <a href="{{ url('/admin/add-attributes/' . $product->id ) }}" class="btn btn-success btn-mini">
                          Agregar</a>
                        <a rel="{{ $product->id }}" rel1="delete-product" href="javascript:" class="btn btn-danger btn-mini deleteRecord">
                          Borrar</a></td>
                      </tr>

                    <div id="myModal{{ $product->id }}" class="modal hide">
                      <div class="modal-header">
                        <button data-dismiss="modal" class="close" type="button">×</button>
                        <h3>{{ $product->product_name }} Detalles Completos</h3>
                      </div>
                      <div class="modal-body">
                        <p>ID Producto: {{ $product->id }}</p>
                        <p>ID Categoria: {{ $product->category_id }}</p>
                        <p>Codigo del Producto: {{ $product->product_code }}</p>
                        <p>Color del Producto: {{ $product->product_color }}</p>
                        <p>Marca: {{ $product->brand }}</p>
                        <p>Cilindrada: {{ $product->engine_capacity }}</p>
                        <p>Estilo: {{ $product->style }}</p>
                        <p>Año: {{ $product->year }}</p>
                        <p>Estilo: {{ $product->style }}</p>
                        <p>Precio: {{ $product->price }}</p>
                        <p>Descripcion: {{ $product->description }}</p>
                      </div>
                    </div>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
