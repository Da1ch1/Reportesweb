<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sie</title>




    <link href="{{ asset('material') }}/demo/inicio.css" rel="stylesheet">
   
</head>
<body class="bg-light">
    <div class="sie">
        <h1>SIE</h1>
                <h3>Reportes</h3>
    </div>            
    
    <button class="button" onclick="location.href='{{route('menus.visualizacion') }}'">Soporte Técnico</button>
    <button class="button" onclick="location.href='{{route('ventas.index') }}'">{{ __('Ventas') }}</button>
    <button class="button" >Administración</button>
    <button class="button" onclick="location.href='{{route('contabilidad.inicio') }}'">Contabilidad</button>
    <button class="button">Márketing</button>
      <script src="{{ asset('material') }}/js/inicio.js"></script>
</body>
</html>