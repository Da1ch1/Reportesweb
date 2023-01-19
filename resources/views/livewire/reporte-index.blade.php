<div>
    <div class="row">
        <div class="col-sm-3">
            <input style="margin-left: 15px" type="text" name="" id="" placeholder="Buscar..." class="form-control border-dark-subtle" wire:model="busqueda">
        </div>
        <div class="col-sm-1">
            <select  name="" id="" class="form-select  border-dark-subtle" style="margin-left: 8px;" wire:model="paginacion">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        <div class="col-sm-1"><a href="{{route('home')}}" class="btn btn-dark" style="margin-left: 8px; --bs-btn-font-size: 12px;" >PDF</a></div>
         </div>
         &nbsp;
    <br>
    <div class="card-body">
        <table class="table table-stripped table-hover">
            <thead>
            <tr>
                <th>
                    id
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
                        <a href="{{route('menus.show', $reporte)}}" class="btn btn-dark" style="--bs-btn-padding-y: .28rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .47rem;">ver</a>
                        <a href="{{route('menus.edicion', $reporte)}}" class="btn btn-dark" style="--bs-btn-padding-y: .28rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .47rem;">Editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$reportes->links()}}
    </div>
</div>
