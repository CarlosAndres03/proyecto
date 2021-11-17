@extends('layouts.app')

@section('template_title')
    Artes Marciale
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Artes Marciale') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('artes-marciales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idartemarcial</th>
										<th>Tipodiciplina</th>
										<th>Fechainscripcion</th>
										<th>Fechadesercion</th>
										<th>Fechareincorporacion</th>
										<th>Idequipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($artesMarciales as $artesMarciale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $artesMarciale->idArteMarcial }}</td>
											<td>{{ $artesMarciale->tipoDiciplina }}</td>
											<td>{{ $artesMarciale->fechaInscripcion }}</td>
											<td>{{ $artesMarciale->fechaDesercion }}</td>
											<td>{{ $artesMarciale->fechaReincorporacion }}</td>
											<td>{{ $artesMarciale->idEquipo }}</td>

                                            <td>
                                                <form action="{{ route('artes-marciales.destroy',$artesMarciale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('artes-marciales.show',$artesMarciale->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('artes-marciales.edit',$artesMarciale->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $artesMarciales->links() !!}
            </div>
        </div>
    </div>
@endsection
