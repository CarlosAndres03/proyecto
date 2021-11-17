@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? 'Show Pago' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idpago:</strong>
                            {{ $pago->idPago }}
                        </div>
                        <div class="form-group">
                            <strong>Fechapago:</strong>
                            {{ $pago->fechaPago }}
                        </div>
                        <div class="form-group">
                            <strong>Montodado:</strong>
                            {{ $pago->montoDado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
