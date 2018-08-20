@extends('layouts.adminLayout.admin_design')
@section('content')

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">
        Productos</a> <a href="#" class="current">Agregar Producto</a> </div>
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
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Agregar Producto</h5>
            </div>
            <div class="widget-content nopadding">

              <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add-product') }}" name="add_product" id="add_product" novalidate="novalidate">
                {{ csrf_field() }}

                <div class="control-group">
                  <label class="control-label">Categorias</label>
                  <div class="controls">
                    <select name="category_id" id="category_id">
                      <?php echo $categories_dropdown; ?>
                    </select>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Nombre del Producto</label>
                  <div class="controls">
                    <input type="text" name="product_name" id="product_name">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Codigo del Producto</label>
                  <div class="controls">
                    <input type="text" name="product_code" id="product_code">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Color del Producto</label>
                  <div class="controls">
                    <input type="text" name="product_color" id="product_color">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Marca</label>
                  <div class="controls">
                    <input type="text" name="brand" id="brand">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Cilindrada</label>
                  <div class="controls">
                    <input type="text" name="engine_capacity" id="engine_capacity">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Estilo</label>
                  <div class="controls">
                  <input type="text" name="style" id="style">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Año</label>
                  <div class="controls">
                    <input type="text" name="year" id="year">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Descripcion</label>
                  <div class="controls">
                    <textarea name="description" id="description"></textarea>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Precio</label>
                  <div class="controls">
                    <input type="text" name="price" id="price">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Imagen</label>
                  <div class="controls">
                    <input type="file" name="image" id="image" />
                  </div>
                </div>

                <div class="form-actions">
                  <input type="submit" value="Agregar Categoria" class="btn btn-success">
                </div>
                
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
