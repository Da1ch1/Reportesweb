@extends('layouts.app')
@section('title', "Inicio")

@section('Ini')
    <h3> Listado de reportes</h3>
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
                        {{$reporte->Fecha_inicio->format(' d / m / y')}}
                    </td>
                    <td>
                        {{$reporte->Fecha_fin->format(' d / m / y')}}
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
                        <a href="{{route('menus.edicion', [$reporte])}}" class="btn btn-primary">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
