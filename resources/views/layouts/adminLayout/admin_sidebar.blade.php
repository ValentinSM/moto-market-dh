<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{ url('/admin/dashboard') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Categorias</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/add-category') }}">Agregar Categoria</a></li>
        <li><a href="{{ url('/admin/view-categories') }}">Ver Categorias</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Productos</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/add-product') }}">Agregar Producto</a></li>
        <li><a href="{{ url('/admin/view-products') }}">Ver Productos</a></li>
      </ul>
    </li>

  </ul>

</div>
<!--sidebar-menu-->
