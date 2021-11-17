@extends('layouts.app')

@section('template_title')
    Direccione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Direccione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('direcciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Iddireccion</th>
										<th>Nombreestado</th>
										<th>Municipio</th>
										<th>Colonia</th>
										<th>Calle</th>
										<th>Cp</th>
										<th>Numeroexterior</th>
										<th>Idseminario</th>
										<th>Idtorneo</th>
										<th>Idescuela</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($direcciones as $direccione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $direccione->idDireccion }}</td>
											<td>{{ $direccione->nombreEstado }}</td>
											<td>{{ $direccione->municipio }}</td>
											<td>{{ $direccione->colonia }}</td>
											<td>{{ $direccione->calle }}</td>
											<td>{{ $direccione->cp }}</td>
											<td>{{ $direccione->numeroExterior }}</td>
											<td>{{ $direccione->idSeminario }}</td>
											<td>{{ $direccione->idTorneo }}</td>
											<td>{{ $direccione->idEscuela }}</td>

                                            <td>
                                                <form action="{{ route('direcciones.destroy',$direccione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('direcciones.show',$direccione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('direcciones.edit',$direccione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $direcciones->links() !!}
            </div>
        </div>
    </div>
@endsection
