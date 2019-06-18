@extends('layouts.app')

@section('content')
<div class="tablas"> 
        <div>
            <h1>Categorias</h1>
        </div>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($categoria, ['route' => ['categorias.update', $categoria->id], 'method' => 'patch']) !!}

                        @include('categorias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
 </div>
@endsection