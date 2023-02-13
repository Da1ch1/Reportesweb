@extends('layouts.contribuyente')

@section('title','Vista General de Contribuyentes')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vista General') }}
                            </span>

                             
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="vista" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>

										<th>Rfc</th>
										<th>Nombre</th>
										<th>Regimen fiscal</th>
                                        <th>Mes</th>
                                        <th>Estatus</th>
                                        <th>Fecha</th>
                                        <th>Pendientes</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
                                </tbody>
                                @foreach ($avances as $avance)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $avance->contribuyente->rfc }}</td>
                                            <td>{{ $avance->contribuyente->nombre }}</td>
                                            <td>{{ $avance->contribuyente->regimen->regimenfiscal }}</td>
											<td>{{ $avance->mes() }}</td>
											<td>{{ $avance->estatus() }}</td>
											<td>{{ $avance->fecha }}</td>
											<td>{{ $avance->pendientes }}</td>
                                            <td>
                                            <form action="{{ route('avances.destroy',$avance->id) }}" method="POST">
                                                
                                                <a class="btn btn-sm btn-success" href="{{ route('avances.edit',$avance->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
               
            </div>
        </div>
    </div>
@endsection

                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
                
                <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

                <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>


                <!-- Para estilos de Ecxel-->
                <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.templates.min.js"></script>


                <script src="{{asset('material')}}/js/jquery-3.3.1.js"></script>
                <script src="{{asset('material')}}/js/jquery.dataTables.min.js"></script>
                <script src="{{asset('material')}}/js/dataTables.buttons.min.js"></script>
                <script src="{{asset('material')}}/js/buttons.flash.min.js"></script>
                
                <script src="{{ asset('material') }}/js/pdfmake.min.js"></script>
                <script src="{{asset('material')}}/js/vfs_fonts.js"></script>
                <script src="{{asset('material')}}/js/buttons.html5.min.js"></script>
               
                <script src="{{asset('material')}}/js/scripts.js"></script>
                