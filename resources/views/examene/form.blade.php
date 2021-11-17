<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idExamen') }}
            {{ Form::text('idExamen', $examene->idExamen, ['class' => 'form-control' . ($errors->has('idExamen') ? ' is-invalid' : ''), 'placeholder' => 'Idexamen']) }}
            {!! $errors->first('idExamen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaExamen') }}
            {{ Form::text('fechaExamen', $examene->fechaExamen, ['class' => 'form-control' . ($errors->has('fechaExamen') ? ' is-invalid' : ''), 'placeholder' => 'Fechaexamen']) }}
            {!! $errors->first('fechaExamen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreSinodal') }}
            {{ Form::text('nombreSinodal', $examene->nombreSinodal, ['class' => 'form-control' . ($errors->has('nombreSinodal') ? ' is-invalid' : ''), 'placeholder' => 'Nombresinodal']) }}
            {!! $errors->first('nombreSinodal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gradoObtenido') }}
            {{ Form::text('gradoObtenido', $examene->gradoObtenido, ['class' => 'form-control' . ($errors->has('gradoObtenido') ? ' is-invalid' : ''), 'placeholder' => 'Gradoobtenido']) }}
            {!! $errors->first('gradoObtenido', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>