<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idPago') }}
            {{ Form::text('idPago', $pago->idPago, ['class' => 'form-control' . ($errors->has('idPago') ? ' is-invalid' : ''), 'placeholder' => 'Idpago']) }}
            {!! $errors->first('idPago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaPago') }}
            {{ Form::text('fechaPago', $pago->fechaPago, ['class' => 'form-control' . ($errors->has('fechaPago') ? ' is-invalid' : ''), 'placeholder' => 'Fechapago']) }}
            {!! $errors->first('fechaPago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('montoDado') }}
            {{ Form::text('montoDado', $pago->montoDado, ['class' => 'form-control' . ($errors->has('montoDado') ? ' is-invalid' : ''), 'placeholder' => 'Montodado']) }}
            {!! $errors->first('montoDado', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>