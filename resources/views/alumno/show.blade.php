@extends('layouts.app')

@section('template_title')
    {{ $alumno->name ?? 'Show Alumno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idalumno:</strong>
                            {{ $alumno->idAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $alumno->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            {{ $alumno->apellidopaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            {{ $alumno->apellidomaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Iddireccion:</strong>
                            {{ $alumno->idDireccion }}
                        </div>
                        <div class="form-group">
                            <strong>Idartemarcial:</strong>
                            {{ $alumno->idArteMarcial }}
                        </div>
                        <div class="form-group">
                            <strong>Idtorneo:</strong>
                            {{ $alumno->idTorneo }}
                        </div>
                        <div class="form-group">
                            <strong>Idseminario:</strong>
                            {{ $alumno->idSeminario }}
                        </div>
                        <div class="form-group">
                            <strong>Idexamen:</strong>
                            {{ $alumno->idExamen }}
                        </div>
                        <div class="form-group">
                            <strong>Idservicio:</strong>
                            {{ $alumno->idServicio }}
                        </div>
                        <div class="form-group">
                            <strong>Idpago:</strong>
                            {{ $alumno->idPago }}
                        </div>
                        <div class="form-group">
                            <strong>Idescuela:</strong>
                            {{ $alumno->idEscuela }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
