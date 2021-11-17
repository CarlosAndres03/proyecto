<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idArteMarcial') }}
            {{ Form::text('idArteMarcial', $artesMarciale->idArteMarcial, ['class' => 'form-control' . ($errors->has('idArteMarcial') ? ' is-invalid' : ''), 'placeholder' => 'Idartemarcial']) }}
            {!! $errors->first('idArteMarcial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipoDiciplina') }}
            {{ Form::text('tipoDiciplina', $artesMarciale->tipoDiciplina, ['class' => 'form-control' . ($errors->has('tipoDiciplina') ? ' is-invalid' : ''), 'placeholder' => 'Tipodiciplina']) }}
            {!! $errors->first('tipoDiciplina', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaInscripcion') }}
            {{ Form::text('fechaInscripcion', $artesMarciale->fechaInscripcion, ['class' => 'form-control' . ($errors->has('fechaInscripcion') ? ' is-invalid' : ''), 'placeholder' => 'Fechainscripcion']) }}
            {!! $errors->first('fechaInscripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaDesercion') }}
            {{ Form::text('fechaDesercion', $artesMarciale->fechaDesercion, ['class' => 'form-control' . ($errors->has('fechaDesercion') ? ' is-invalid' : ''), 'placeholder' => 'Fechadesercion']) }}
            {!! $errors->first('fechaDesercion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaReincorporacion') }}
            {{ Form::text('fechaReincorporacion', $artesMarciale->fechaReincorporacion, ['class' => 'form-control' . ($errors->has('fechaReincorporacion') ? ' is-invalid' : ''), 'placeholder' => 'Fechareincorporacion']) }}
            {!! $errors->first('fechaReincorporacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEquipo') }}
            {{ Form::text('idEquipo', $artesMarciale->idEquipo, ['class' => 'form-control' . ($errors->has('idEquipo') ? ' is-invalid' : ''), 'placeholder' => 'Idequipo']) }}
            {!! $errors->first('idEquipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>