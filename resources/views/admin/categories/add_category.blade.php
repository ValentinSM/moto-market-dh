@extends('layouts.adminLayout.admin_design')
@section('content')

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categorias</a> <a href="#" class="current">Agregar Categoria</a> </div>
      <h1>Categorias</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Agregar Categoria</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-category') }}" name="add_category" id="add_category" novalidate="novalidate">
                {{ csrf_field() }}

                <div class="control-group">
                  <label class="control-label">Nombre de la Categoria</label>
                  <div class="controls">
                    <input type="text" name="category_name" id="category_name">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Nivel de la Categoria</label>
                  <div class="controls">
                    <select name="parent_id">
                      <option value="0">Categoria Principal</option>
                      @foreach ($levels as $val)
                        <option value="{{ $val -> id }}">{{ $val->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Descripcion</label>
                  <div class="controls">
                    <textarea name="description" id="description"></textarea>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">URL</label>
                  <div class="controls">
                    <input type="text" name="url" id="url">
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
