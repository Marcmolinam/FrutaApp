@extends('layouts.app')

@section('content')
<div class="tablas">
        <h1>
            Producto
        </h1>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('productos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
 </div>
@endsection