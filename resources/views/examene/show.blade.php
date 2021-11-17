@extends('layouts.app')

@section('template_title')
    {{ $examene->name ?? 'Show Examene' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Examene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('examenes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idexamen:</strong>
                            {{ $examene->idExamen }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaexamen:</strong>
                            {{ $examene->fechaExamen }}
                        </div>
                        <div class="form-group">
                            <strong>Nombresinodal:</strong>
                            {{ $examene->nombreSinodal }}
                        </div>
                        <div class="form-group">
                            <strong>Gradoobtenido:</strong>
                            {{ $examene->gradoObtenido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
