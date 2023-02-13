<div class="card">
    <div class="card-header">
        <div style="display: flex; justify-content: space-between; align-items: center;">

            <span id="card_title">
                {{ __('Soporte') }}
            </span>
            <div class="col-sm-1">
                <button onclick="exportTableToExcel('tblData', 'Tabla_Soporte-Técnico')" class=" float-center btn btn-dark" style="margin-left: 18px; --bs-btn-font-size: 9px;">Export Table</button>
            </div>
            <div class="float-center col-sm-1 " >
                <input  type="text" name="" id="" placeholder="Buscar..." class="form-control border-dark-subtle" wire:model="busqueda">
            </div>
            <div class="float-center col-mm-1 ">
                <select  name="" id="" class="form-select  border-dark-subtle"  wire:model="paginacion">
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                </select>
            </div>
             <div class="float-right">
                <a href="{{ route('soportes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
            <table class="table table-striped table-hover" id="tblData">
                <thead class="thead">
                    <tr>
                        <th>N°</th>
                        
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Hora Inicio</th>
                        <th>Hora Fin</th>
                        <th>Cliente</th>
                        <th>Asunto</th>
                        <th>Ejecutivo</th>
                        <th>Estatus</th>
                        <th>Evidencia</th>
                        <th>Post venta</th>
                        <th>Comentarios</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($soportes as $soporte)
                        <tr>
                            <td>{{ ++$i }}</td>
                            
                            <td>{{ $soporte->Fecha_inicio }}</td>
                            <td>{{ $soporte->Fecha_fin }}</td>
                            <td>{{ $soporte->Hora_inicio }}</td>
                            <td>{{ $soporte->Hora_fin }}</td>
                            <td>{{ $soporte->Cliente }}</td>
                            <td>{{ $soporte->Asunto }}</td>
                            <td>{{ $soporte->spejecutivo->nombre }}</td>
                            <td>{{ $soporte->stat->estatus }}</td>
                            <td>{{ $soporte->Evidencia }}</td>
                            <td>{{ $soporte->PostVenta }}</td>
                            <td>{{ $soporte->Comentarios }}</td>

                            <td>
                                <form action="{{ route('soportes.destroy',$soporte->id) }}" method="POST">
                                    <a class="btn btn-sm btn-primary " href="{{ route('soportes.show',$soporte->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                    <a class="btn btn-sm btn-success" href="{{ route('soportes.edit',$soporte->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
        {!! $soportes->links() !!}
    </div>
</div>