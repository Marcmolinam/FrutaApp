@extends('layouts.app')

@section('content')
<div class="tablas">
    <div class="row">
                <div class="col-md-4">
                    @foreach ($productos as $pro)
                    	@if ($pro->id == 1)
                    	<h1><p>{!! $pro->nombre !!}</p></h1>
                    		<img src='{!! $pro->imgProducto !!}' class="img-responsive" width="300" height="100">
                    
                   
		    		@foreach ($categorias as $cat)
		               @if ($cat->id==$pro->categoria_id)
		                   
		                 <td>{!! $cat->nombre !!}</td>
		               @endif
		            @endforeach
                    <p>{!! $pro->descripcion !!}</p>

                    @endif
                     @endforeach
                </div>
                <div class="col-md-4">
                    @foreach ($productos as $pro)
                    	@if ($pro->id == 2)
                    	<h1><p>{!! $pro->nombre !!}</p></h1>
                    		<img src='{!! $pro->imgProducto !!}' class="img-responsive" width="300" height="100">
                    
                   @foreach ($categorias as $cat)
		               @if ($cat->id==$pro->categoria_id)
		                   
		                 <td>{!! $cat->nombre !!}</td>
		               @endif
		            @endforeach
                    <p>{!! $pro->descripcion !!}</p>

                    @endif
                     @endforeach
                </div>
                <div class="col-md-4">
                    @foreach ($productos as $pro)
                    	@if ($pro->id == 3)
                    	<h1><p>{!! $pro->nombre !!}</p></h1>
                    		<img src='{!! $pro->imgProducto !!}' class="img-responsive" width="300" height="100">
                    
                   @foreach ($categorias as $cat)
		               @if ($cat->id==$pro->categoria_id)
		                   
		                 <td>{!! $cat->nombre !!}</td>
		               @endif
		            @endforeach
                    <p>{!! $pro->descripcion !!}</p>

                    @endif
                     @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
