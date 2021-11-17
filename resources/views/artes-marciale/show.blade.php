@extends('layouts.app')

@section('template_title')
    {{ $artesMarciale->name ?? 'Show Artes Marciale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Artes Marciale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('artes-marciales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idartemarcial:</strong>
                            {{ $artesMarciale->idArteMarcial }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodiciplina:</strong>
                            {{ $artesMarciale->tipoDiciplina }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainscripcion:</strong>
                            {{ $artesMarciale->fechaInscripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fechadesercion:</strong>
                            {{ $artesMarciale->fechaDesercion }}
                        </div>
                        <div class="form-group">
                            <strong>Fechareincorporacion:</strong>
                            {{ $artesMarciale->fechaReincorporacion }}
                        </div>
                        <div class="form-group">
                            <strong>Idequipo:</strong>
                            {{ $artesMarciale->idEquipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
