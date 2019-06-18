@extends('layouts.app')
 
@section('content')
 <div class="tablas">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Producto</th>
            <th style="width:10%">Precio</th>
            <th style="width:8%">Cantidad</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
       <tbody>
 
        <?php $total = 0 ?>
 
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
 
                <?php $total += $details['precio'] * $details['cantidad'] ?>
 
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['imgProducto'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['nombre'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Precio">${{ $details['precio'] }}</td>
                    <td data-th="cantidad">
                        <input type="number" value="{{ $details['cantidad'] }}" class="form-control cantidad" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['precio'] * $details['cantidad'] }}</td>
                    <td class="actions" data-th="">
                        
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
 
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total {{ $total }}</strong></td>
        </tr>
        <tr>
            <td><a href="{{ route('productos.index') }}" class="btn btn-warning">Seguir Comprando</a>
            </td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
        </tr>
        </tfoot>
    </table>
    </div>
@section('scripts')
 
 
    <script type="text/javascript">

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
 
    </script>
 
@endsection
@endsection