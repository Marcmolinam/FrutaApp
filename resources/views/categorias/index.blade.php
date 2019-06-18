@extends('layouts.app')

@section('content')
    <div class="tablas">
        <div class="col-lg-10">
            <h1>Categorias</h1>
        </div>
        <div class="col-md-2" >
            <a class="btn btn-primary" style="margin-top: 23px" href="{!! route('categorias.create') !!}">Agregar</a>
        </div>
        <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('categorias.table')
            </div>
        </div>
    </div>
</div>

@endsection

