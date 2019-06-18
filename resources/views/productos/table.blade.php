<div class="table-responsive">
    <table class="table" id="productos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Imgproducto</th>
        <th>Id Categoria</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{!! $producto->nombre !!}</td>
            <td>{!! $producto->descripcion !!}</td>
            <td>{!! $producto->precio !!}</td>
            <td><img src="{!! $producto->imgProducto !!}" height="150" width="200"></td>
            @foreach ($categorias as $cat)
               @if ($cat->id==$producto->categoria_id)
                   
                 <td>{!! $cat->nombre !!}</td>
               @endif
            @endforeach
                <td>
                    {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('productos.show', [$producto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

                        <a href="{!! route('productos.edit', [$producto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}

                    </div>
                    <a href="{{ url('add-to-cart/'.$producto->id) }}" class="btn btn-default btn"><i class="glyphicon glyphicon-shopping-cart"></i></a>

                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
