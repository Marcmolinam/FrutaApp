@extends('layouts.app')

@section('content')
<div class="tablas">
        <h1>
            Categoria
        </h1>
        
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('categorias.show_fields')
                    <a href="{!! route('categorias.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
