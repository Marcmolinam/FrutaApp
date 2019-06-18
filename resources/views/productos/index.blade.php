@extends('layouts.app')

@section('content')
<div class="tablas">
        <h1>
            Producto
        </h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('productos.create') !!}">Add New</a>
        </h1>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('productos.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
</div>
@endsection

