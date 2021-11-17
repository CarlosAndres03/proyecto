@extends('layouts.app')

@section('template_title')
    {{ $escuela->name ?? 'Show Escuela' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Escuela</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('escuelas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idescuela:</strong>
                            {{ $escuela->idEscuela }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreescuela:</strong>
                            {{ $escuela->nombreEscuela }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
