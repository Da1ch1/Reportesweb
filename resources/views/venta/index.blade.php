@extends('layouts.ventas')

@section('title','Ventas')

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
                                  {{ __('+ Crear venta') }}
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
                                        <th></th>
										<th>Dia</th>
                                        <th></th>
										<th>Contacto</th>
                                        <th></th>
										<th>Actividad</th>
                                        <th></th>
										<th>Proceso actividad</th>
                                        <th></th>
										<th>Atendio</th>
                                        <th></th>
										<th>Costo</th>
                                        <th></th>
										<th>N° factura</th>
                                        <th></th>
										<th>Poliza</th>
                                        <th></th>
										<th>Horario</th>
                                        <th></th>
										<th>Sistemas</th>
                                        <th></th>
										<th>Soporte</th>
                                        <th></th>
										<th>Contabilidad</th>
                                        <th></th>
										<th>Programacion</th>
                                        <th></th>
										<th>Diseño</th>
                                        <th></th>
										<th>Mkt</th>
                                        <th></th>
										<th>Nom</th>
                                        <th></th>
										<th>Equipos</th>
                                        <th></th>
										<th>Antivirus</th>
                                        <th></th>
										<th>Cursos</th>
                                        

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventas as $venta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $venta->cliente->nombre }}</td>
                                            <th></th>
											<td>{{ $venta->Dia }}</td>
                                            <th></th>
											<td>{{ $venta->contacto->nombre }}</td>
                                            <th></th>
											<td>{{ $venta->actividade->actividad }}</td>
                                            <th></th>
											<td>{{ $venta->Procesoactividad }}</td>
                                            <th></th>
											<td>{{ $venta->Atendio }}</td>
                                            <th></th>
											<td>{{ $venta->costo->costos }}</td>
                                            <th></th>
											<td>{{ $venta->Nfactura }}</td>
                                            <th></th>
											<td>{{ $venta->Poliza }}</td>
                                            <th></th>
											<td>{{ $venta->Horario }}</td>
                                            <th></th>
											<td>{{ $venta->Sistemas }}</td>
                                            <th></th>
											<td>{{ $venta->Soporte }}</td>
                                            <th></th>
											<td>{{ $venta->Contabilidad }}</td>
                                            <th></th>
											<td>{{ $venta->Programacion }}</td>
                                            <th></th>
											<td>{{ $venta->Diseño }}</td>
                                            <th></th>
											<td>{{ $venta->MKT }}</td>
                                            <th></th>
											<td>{{ $venta->Nom }}</td>
                                            <th></th>
											<td>{{ $venta->Equipos }}</td>
                                            <th></th>
											<td>{{ $venta->Antivirus }}</td>
                                            <th></th>
											<td>{{ $venta->Cursos }}</td>

                                            <td>
                                                <form action="{{ route('ventas.destroy',$venta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " style="--bs-btn-padding-y: .28rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .67rem;" href="{{ route('ventas.show',$venta->id) }}"><i class="fa fa-fw fa-eye" ></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" style="--bs-btn-padding-y: .28rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .67rem;" href="{{ route('ventas.edit',$venta->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" style="--bs-btn-padding-y: .28rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .67rem;"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>





                                            </td>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            
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
