<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idAlumno') }}
            {{ Form::text('idAlumno', $alumno->idAlumno, ['class' => 'form-control' . ($errors->has('idAlumno') ? ' is-invalid' : ''), 'placeholder' => 'Idalumno']) }}
            {!! $errors->first('idAlumno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $alumno->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidopaterno') }}
            {{ Form::text('apellidopaterno', $alumno->apellidopaterno, ['class' => 'form-control' . ($errors->has('apellidopaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaterno']) }}
            {!! $errors->first('apellidopaterno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidomaterno') }}
            {{ Form::text('apellidomaterno', $alumno->apellidomaterno, ['class' => 'form-control' . ($errors->has('apellidomaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaterno']) }}
            {!! $errors->first('apellidomaterno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idDireccion') }}
            {{ Form::text('idDireccion', $alumno->idDireccion, ['class' => 'form-control' . ($errors->has('idDireccion') ? ' is-invalid' : ''), 'placeholder' => 'Iddireccion']) }}
            {!! $errors->first('idDireccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idArteMarcial') }}
            {{ Form::text('idArteMarcial', $alumno->idArteMarcial, ['class' => 'form-control' . ($errors->has('idArteMarcial') ? ' is-invalid' : ''), 'placeholder' => 'Idartemarcial']) }}
            {!! $errors->first('idArteMarcial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTorneo') }}
            {{ Form::text('idTorneo', $alumno->idTorneo, ['class' => 'form-control' . ($errors->has('idTorneo') ? ' is-invalid' : ''), 'placeholder' => 'Idtorneo']) }}
            {!! $errors->first('idTorneo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idSeminario') }}
            {{ Form::text('idSeminario', $alumno->idSeminario, ['class' => 'form-control' . ($errors->has('idSeminario') ? ' is-invalid' : ''), 'placeholder' => 'Idseminario']) }}
            {!! $errors->first('idSeminario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idExamen') }}
            {{ Form::text('idExamen', $alumno->idExamen, ['class' => 'form-control' . ($errors->has('idExamen') ? ' is-invalid' : ''), 'placeholder' => 'Idexamen']) }}
            {!! $errors->first('idExamen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idServicio') }}
            {{ Form::text('idServicio', $alumno->idServicio, ['class' => 'form-control' . ($errors->has('idServicio') ? ' is-invalid' : ''), 'placeholder' => 'Idservicio']) }}
            {!! $errors->first('idServicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPago') }}
            {{ Form::text('idPago', $alumno->idPago, ['class' => 'form-control' . ($errors->has('idPago') ? ' is-invalid' : ''), 'placeholder' => 'Idpago']) }}
            {!! $errors->first('idPago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEscuela') }}
            {{ Form::text('idEscuela', $alumno->idEscuela, ['class' => 'form-control' . ($errors->has('idEscuela') ? ' is-invalid' : ''), 'placeholder' => 'Idescuela']) }}
            {!! $errors->first('idEscuela', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>