<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idSeminario') }}
            {{ Form::text('idSeminario', $seminario->idSeminario, ['class' => 'form-control' . ($errors->has('idSeminario') ? ' is-invalid' : ''), 'placeholder' => 'Idseminario']) }}
            {!! $errors->first('idSeminario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaSeminario') }}
            {{ Form::text('fechaSeminario', $seminario->fechaSeminario, ['class' => 'form-control' . ($errors->has('fechaSeminario') ? ' is-invalid' : ''), 'placeholder' => 'Fechaseminario']) }}
            {!! $errors->first('fechaSeminario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precioSeminario') }}
            {{ Form::text('precioSeminario', $seminario->precioSeminario, ['class' => 'form-control' . ($errors->has('precioSeminario') ? ' is-invalid' : ''), 'placeholder' => 'Precioseminario']) }}
            {!! $errors->first('precioSeminario', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>