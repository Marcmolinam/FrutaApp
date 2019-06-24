<!-- Porducto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('porducto_id', 'Porducto Id:') !!}
    {!! Form::text('porducto_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Venta Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('venta_id', 'Venta Id:') !!}
    {!! Form::text('venta_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::text('precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Importe Field -->
<div class="form-group col-sm-6">
    {!! Form::label('importe', 'Importe:') !!}
    {!! Form::text('importe', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('detalleVentas.index') !!}" class="btn btn-default">Cancel</a>
</div>
