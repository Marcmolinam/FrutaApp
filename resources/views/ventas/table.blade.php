<div class="table-responsive">
    <table class="table" id="ventas-table">
        <thead>
            <tr>
                <th>Subtotal</th>
        <th>Iva</th>
        <th>Descuento</th>
        <th>Total</th>
        <th>Cliente Id</th>
        <th>Usuario Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ventas as $venta)
            <tr>
            <td>{!! $venta->subtotal !!}</td>
            <td>{!! $venta->iva !!}</td>
            <td>{!! $venta->descuento !!}</td>
            <td>{!! $venta->total !!}</td>
            <td>{!! $venta->cliente_id !!}</td>
            <td>{!! $venta->usuario_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['ventas.destroy', $venta->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('ventas.show', [$venta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('ventas.edit', [$venta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
