@extends('layouts.app')

@section('template_title')
    {{ $profesore->name ?? 'Show Profesore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Profesore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('profesores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idprofesor:</strong>
                            {{ $profesore->idProfesor }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $profesore->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            {{ $profesore->apellidoPaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            {{ $profesore->apellidoMaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Idartemarcial:</strong>
                            {{ $profesore->idArteMarcial }}
                        </div>
                        <div class="form-group">
                            <strong>Idalumno:</strong>
                            {{ $profesore->idAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Idseminario:</strong>
                            {{ $profesore->idSeminario }}
                        </div>
                        <div class="form-group">
                            <strong>Idexamen:</strong>
                            {{ $profesore->idExamen }}
                        </div>
                        <div class="form-group">
                            <strong>Idservicio:</strong>
                            {{ $profesore->idServicio }}
                        </div>
                        <div class="form-group">
                            <strong>Idpago:</strong>
                            {{ $profesore->idPago }}
                        </div>
                        <div class="form-group">
                            <strong>Idescuela:</strong>
                            {{ $profesore->idEscuela }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
