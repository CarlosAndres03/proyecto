@extends('layouts.app')

@section('template_title')
    {{ $direccione->name ?? 'Show Direccione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Direccione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('direcciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Iddireccion:</strong>
                            {{ $direccione->idDireccion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreestado:</strong>
                            {{ $direccione->nombreEstado }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $direccione->municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Colonia:</strong>
                            {{ $direccione->colonia }}
                        </div>
                        <div class="form-group">
                            <strong>Calle:</strong>
                            {{ $direccione->calle }}
                        </div>
                        <div class="form-group">
                            <strong>Cp:</strong>
                            {{ $direccione->cp }}
                        </div>
                        <div class="form-group">
                            <strong>Numeroexterior:</strong>
                            {{ $direccione->numeroExterior }}
                        </div>
                        <div class="form-group">
                            <strong>Idseminario:</strong>
                            {{ $direccione->idSeminario }}
                        </div>
                        <div class="form-group">
                            <strong>Idtorneo:</strong>
                            {{ $direccione->idTorneo }}
                        </div>
                        <div class="form-group">
                            <strong>Idescuela:</strong>
                            {{ $direccione->idEscuela }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
