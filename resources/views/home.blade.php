<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDF</title>
         <!-- stilos bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet">
    </head>
<body class="card-body">
    <div class="col-sm-1"><a href="{{route('menus.visualizacion')}}" class="btn btn-dark" style="margin-left: 8px; --bs-btn-font-size: 12px;" >Inicio</a></div>
    <br>
    <div class="card">
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
                    
                </tr>
            @endforeach
            </tbody>
        </table>
        
    </div> 
    
</body>   
</html>
