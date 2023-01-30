<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDF</title>
         <!-- stilos bootstrap -->
    <link href="{{ public_path('sass') }}/resources/sass/app.scss" rel="stylesheet" type="text/css">

</head>
    <!-- Tabla para el PDF -->
<body class="card">
    <h2>Lista de reportes</h2>
    <div class="table table-stripped table-hover">
        <table >
            <thead>
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
                </tr>
            @endforeach
            </tbody>
        </table>
    </div> 
    {{$reportes->links()}}
</body>   
</html>
