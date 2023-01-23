@extends('layouts.ventas')

@section('title', 'Venta')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Venta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ventas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('+Crear venta') }}
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
                                        
										<th>Cliente</th>
										<th>Dia</th>
										<th>Contacto</th>
										<th>Actividad</th>
										<th>Proceso actividad</th>
										<th>Atendio</th>
										<th>Sin costo</th>
										<th>N° factura</th>
										<th>Poliza</th>
										<th>Horario</th>
										<th>Sistemas</th>
										<th>Soporte</th>
										<th>Sistema</th>
										<th>Soporte</th>
										<th>Contabilidad</th>
										<th>Programacion</th>
										<th>Diseño</th>
										<th>Mkt</th>
										<th>Nom</th>
										<th>Equipos</th>
										<th>Antivirus</th>
										<th>Cursos</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventas as $venta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $venta->cliente->nombre }}</td>
											<td>{{ $venta->Dia }}</td>
											<td>{{ $venta->Contacto }}</td>
											<td>{{ $venta->Actividad }}</td>
											<td>{{ $venta->Procesoactividad }}</td>
											<td>{{ $venta->Atendio }}</td>
											<td>{{ $venta->Sincosto }}</td>
											<td>{{ $venta->Nfactura }}</td>
											<td>{{ $venta->Poliza }}</td>
											<td>{{ $venta->Horario }}</td>
											<td>{{ $venta->Sistemas }}</td>
											<td>{{ $venta->Soporte }}</td>
											<td>{{ $venta->Sistema2 }}</td>
											<td>{{ $venta->Soporte2 }}</td>
											<td>{{ $venta->Contabilidad }}</td>
											<td>{{ $venta->Programacion }}</td>
											<td>{{ $venta->Diseño }}</td>
											<td>{{ $venta->MKT }}</td>
											<td>{{ $venta->Nom }}</td>
											<td>{{ $venta->Equipos }}</td>
											<td>{{ $venta->Antivirus }}</td>
											<td>{{ $venta->Cursos }}</td>

                                            <td>
                                                <form action="{{ route('ventas.destroy',$venta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ventas.show',$venta->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ventas.edit',$venta->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ventas->links() !!}
            </div>
        </div>
    </div>
@endsection
