<li class=" {{ Request::is('categorias*') ? 'active' : '' }}" style="display: block;">
    <a class="list-group-item list-group-item-primary" href="{!! route('categorias.index') !!}">Categorias</a>
</li>
<li class=" {{ Request::is('productos*') ? 'active' : '' }}" style="display: block; ">
    <a class="list-group-item list-group-item-primary" href="{!! route('productos.index') !!}">Productos</a>
</li>
<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{!! route('clientes.index') !!}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>
<li class="{{ Request::is('rols*') ? 'active' : '' }}">
    <a href="{!! route('rols.index') !!}"><i class="fa fa-edit"></i><span>Rols</span></a>
</li>
<li class="{{ Request::is('ventas*') ? 'active' : '' }}">
    <a href="{!! route('ventas.index') !!}"><i class="fa fa-edit"></i><span>Ventas</span></a>
</li>
<li class="{{ Request::is('detalleVentas*') ? 'active' : '' }}">
    <a href="{!! route('detalleVentas.index') !!}"><i class="fa fa-edit"></i><span>Detalle  Ventas</span></a>
</li>

