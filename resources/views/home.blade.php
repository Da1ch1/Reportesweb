<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDF</title>
         <!-- stilos bootstrap -->
        <link href="{{ public_path('/material/demo/demo.css')}}" rel="stylesheet" type="text/css">
</head>
    <!-- Tabla para el PDF -->
<body class="card">
    <h2>Lista de reportes</h2>
    
            <table class="table table-striped table-hover">
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($soportes as $soporte)
                        <tr>
                            <td>{{ $soporte->id }}</td>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
    {!! $soportes->links() !!}
</body>   
</html>
