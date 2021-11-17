<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idEscuela') }}
            {{ Form::text('idEscuela', $escuela->idEscuela, ['class' => 'form-control' . ($errors->has('idEscuela') ? ' is-invalid' : ''), 'placeholder' => 'Idescuela']) }}
            {!! $errors->first('idEscuela', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreEscuela') }}
            {{ Form::text('nombreEscuela', $escuela->nombreEscuela, ['class' => 'form-control' . ($errors->has('nombreEscuela') ? ' is-invalid' : ''), 'placeholder' => 'Nombreescuela']) }}
            {!! $errors->first('nombreEscuela', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>