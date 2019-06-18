@extends('layouts.app')

@section('content')
<div class="tablas">
        <h1>
            Producto
        </h1>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('productos.show_fields')
                    <a href="{!! route('productos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
