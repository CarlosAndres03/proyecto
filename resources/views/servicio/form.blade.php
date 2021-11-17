<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idServicio') }}
            {{ Form::text('idServicio', $servicio->idServicio, ['class' => 'form-control' . ($errors->has('idServicio') ? ' is-invalid' : ''), 'placeholder' => 'Idservicio']) }}
            {!! $errors->first('idServicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $servicio->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horasRealizadas') }}
            {{ Form::text('horasRealizadas', $servicio->horasRealizadas, ['class' => 'form-control' . ($errors->has('horasRealizadas') ? ' is-invalid' : ''), 'placeholder' => 'Horasrealizadas']) }}
            {!! $errors->first('horasRealizadas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('actividadHecha') }}
            {{ Form::text('actividadHecha', $servicio->actividadHecha, ['class' => 'form-control' . ($errors->has('actividadHecha') ? ' is-invalid' : ''), 'placeholder' => 'Actividadhecha']) }}
            {!! $errors->first('actividadHecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>