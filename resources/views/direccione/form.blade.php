<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idDireccion') }}
            {{ Form::text('idDireccion', $direccione->idDireccion, ['class' => 'form-control' . ($errors->has('idDireccion') ? ' is-invalid' : ''), 'placeholder' => 'Iddireccion']) }}
            {!! $errors->first('idDireccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreEstado') }}
            {{ Form::text('nombreEstado', $direccione->nombreEstado, ['class' => 'form-control' . ($errors->has('nombreEstado') ? ' is-invalid' : ''), 'placeholder' => 'Nombreestado']) }}
            {!! $errors->first('nombreEstado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('municipio') }}
            {{ Form::text('municipio', $direccione->municipio, ['class' => 'form-control' . ($errors->has('municipio') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('municipio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('colonia') }}
            {{ Form::text('colonia', $direccione->colonia, ['class' => 'form-control' . ($errors->has('colonia') ? ' is-invalid' : ''), 'placeholder' => 'Colonia']) }}
            {!! $errors->first('colonia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calle') }}
            {{ Form::text('calle', $direccione->calle, ['class' => 'form-control' . ($errors->has('calle') ? ' is-invalid' : ''), 'placeholder' => 'Calle']) }}
            {!! $errors->first('calle', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cp') }}
            {{ Form::text('cp', $direccione->cp, ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''), 'placeholder' => 'Cp']) }}
            {!! $errors->first('cp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numeroExterior') }}
            {{ Form::text('numeroExterior', $direccione->numeroExterior, ['class' => 'form-control' . ($errors->has('numeroExterior') ? ' is-invalid' : ''), 'placeholder' => 'Numeroexterior']) }}
            {!! $errors->first('numeroExterior', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idSeminario') }}
            {{ Form::text('idSeminario', $direccione->idSeminario, ['class' => 'form-control' . ($errors->has('idSeminario') ? ' is-invalid' : ''), 'placeholder' => 'Idseminario']) }}
            {!! $errors->first('idSeminario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTorneo') }}
            {{ Form::text('idTorneo', $direccione->idTorneo, ['class' => 'form-control' . ($errors->has('idTorneo') ? ' is-invalid' : ''), 'placeholder' => 'Idtorneo']) }}
            {!! $errors->first('idTorneo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEscuela') }}
            {{ Form::text('idEscuela', $direccione->idEscuela, ['class' => 'form-control' . ($errors->has('idEscuela') ? ' is-invalid' : ''), 'placeholder' => 'Idescuela']) }}
            {!! $errors->first('idEscuela', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>