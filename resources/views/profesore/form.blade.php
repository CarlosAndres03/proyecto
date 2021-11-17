<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idProfesor') }}
            {{ Form::text('idProfesor', $profesore->idProfesor, ['class' => 'form-control' . ($errors->has('idProfesor') ? ' is-invalid' : ''), 'placeholder' => 'Idprofesor']) }}
            {!! $errors->first('idProfesor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $profesore->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoPaterno') }}
            {{ Form::text('apellidoPaterno', $profesore->apellidoPaterno, ['class' => 'form-control' . ($errors->has('apellidoPaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaterno']) }}
            {!! $errors->first('apellidoPaterno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoMaterno') }}
            {{ Form::text('apellidoMaterno', $profesore->apellidoMaterno, ['class' => 'form-control' . ($errors->has('apellidoMaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaterno']) }}
            {!! $errors->first('apellidoMaterno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idArteMarcial') }}
            {{ Form::text('idArteMarcial', $profesore->idArteMarcial, ['class' => 'form-control' . ($errors->has('idArteMarcial') ? ' is-invalid' : ''), 'placeholder' => 'Idartemarcial']) }}
            {!! $errors->first('idArteMarcial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idAlumno') }}
            {{ Form::text('idAlumno', $profesore->idAlumno, ['class' => 'form-control' . ($errors->has('idAlumno') ? ' is-invalid' : ''), 'placeholder' => 'Idalumno']) }}
            {!! $errors->first('idAlumno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idSeminario') }}
            {{ Form::text('idSeminario', $profesore->idSeminario, ['class' => 'form-control' . ($errors->has('idSeminario') ? ' is-invalid' : ''), 'placeholder' => 'Idseminario']) }}
            {!! $errors->first('idSeminario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idExamen') }}
            {{ Form::text('idExamen', $profesore->idExamen, ['class' => 'form-control' . ($errors->has('idExamen') ? ' is-invalid' : ''), 'placeholder' => 'Idexamen']) }}
            {!! $errors->first('idExamen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idServicio') }}
            {{ Form::text('idServicio', $profesore->idServicio, ['class' => 'form-control' . ($errors->has('idServicio') ? ' is-invalid' : ''), 'placeholder' => 'Idservicio']) }}
            {!! $errors->first('idServicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPago') }}
            {{ Form::text('idPago', $profesore->idPago, ['class' => 'form-control' . ($errors->has('idPago') ? ' is-invalid' : ''), 'placeholder' => 'Idpago']) }}
            {!! $errors->first('idPago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEscuela') }}
            {{ Form::text('idEscuela', $profesore->idEscuela, ['class' => 'form-control' . ($errors->has('idEscuela') ? ' is-invalid' : ''), 'placeholder' => 'Idescuela']) }}
            {!! $errors->first('idEscuela', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>