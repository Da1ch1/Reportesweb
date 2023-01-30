<div class="card">
    <div class="card-header">
        <div style="display: flex; justify-content: space-between; align-items: center;">  
                    <span id="card_title">
                        {{ __('Reportes') }}
                        <a href="{{route('home')}}" class="btn btn-dark" style="margin-left: 18px; --bs-btn-font-size: 12px;" >PDF</a>
                    &nbsp;
                    </span>
                    <div class="col-sm-2" >
                        <input style="margin-left: -38px;" type="text" name="" id="" placeholder="Buscar..." class="form-control border-dark-subtle" wire:model="busqueda">
                    </div>
                <div class="float-right">
                      <a href="{{ route('menus.creacion') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                       {{ __('+Crear Reporte') }}
                      </a>
               </div>
        </div>
    </div> 
    <!--Codigo de Alerta-->
                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                @endif
     <!--Tabla de Reportes Soporte Tecnico-->           
    <div class="card-body">
            <div class="table-responsive">
                            <table class="table table-stripped table-hover">
                                     <thead class="thead">
                                        <tr>
                                            <th>
                                                N°
                                            </th>
                                            <th>
                                                Fecha Inicio
                                            </th>
                                            <th>
                                                Fecha Fin
                                            </th>
                                            <th>
                                                Hora Inicio
                                            </th>
                                            <th>
                                                Hora Fin
                                            </th>
                                            <th>
                                                Cliente
                                            </th>
                                            <th>
                                                Asunto
                                            </th>
                                            <th>
                                                Ejecutivo
                                            </th>
                                            <th>
                                                Estatus
                                            </th>
                                            <th>
                                                Evidencia
                                            </th>
                                            <th>
                                                Post-Venta
                                            </th>
                                            <th>
                                                Comentarios
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reportes as $reporte)
                                            <tr>
                                                
                                                <td>
                                                    {{$reporte->id}}
                                                </td>
                                                <td>
                                                    {{$reporte->Fecha_inicio->format('d-m-y')}}
                                                </td>
                                                <td>
                                                    {{$reporte->Fecha_fin->format('d-m-y')}}
                                                </td>
                                                <td>
                                                    {{$reporte->Hora_inicio}}
                                                </td>
                                                <td>
                                                    {{$reporte->Hora_fin}}
                                                </td>
                                                <td>
                                                    {{$reporte->Cliente}}
                                                </td>
                                                <td>
                                                    {{$reporte->Asunto}}
                                                </td>
                                                <td>
                                                    {{$reporte->Ejecutivo()}}
                                                </td>
                                                <td>
                                                    {{$reporte->Estatus()}}
                                                </td>
                                                <td>
                                                    {{$reporte->Evidencia}}
                                                </td>
                                                <td>
                                                    {{$reporte->PostVenta}}
                                                </td>
                                                <td>
                                                    {{$reporte->Comentarios}}
                                                </td>
                                                <td>
                                                    <a href="{{route('menus.show', $reporte)}}" class="btn btn-primary" style="--bs-btn-padding-y: .28rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .67rem;">ver</a>
                                                    <a href="{{route('menus.edicion', $reporte)}}" class="btn  btn-success" style="--bs-btn-padding-y: .28rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .67rem;">Editar</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                             </table>
                                {{$reportes->links()}}
            </div>
    </div> 