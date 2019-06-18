<li class=" {{ Request::is('categorias*') ? 'active' : '' }}" style="display: block;">
    <a class="list-group-item list-group-item-primary" href="{!! route('categorias.index') !!}">Categorias</a>
</li>
<li class=" {{ Request::is('productos*') ? 'active' : '' }}" style="display: block; ">
    <a class="list-group-item list-group-item-primary" href="{!! route('productos.index') !!}">Productos</a>
</li>

