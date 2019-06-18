@extends('layouts.app')

@section('content')
<div class="tablas">
        <h1>
            Categoria
        </h1>
        
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'categorias.store']) !!}

                        @include('categorias.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
