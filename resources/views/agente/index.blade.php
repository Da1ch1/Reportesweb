@extends('layouts.prospectos')

@section('title','Agentes')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Agentes') }}
                                <a href="{{ route('prospectos.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                                    {{ __('Vista') }}
                                  </a>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('agentes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('+ Crear') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-primary">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agentes as $agente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $agente->nombre }}</td>

                                            <td>
                                                <form action="{{ route('agentes.destroy',$agente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success " href="{{ route('agentes.show',$agente->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-primary" href="{{ route('agentes.edit',$agente->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $agentes->links() !!}
            </div>
        </div>
    </div>
@endsection
