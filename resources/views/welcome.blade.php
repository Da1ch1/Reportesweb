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
        <h1>CORPORATIVO</h1>
        <h1 style="margin-left: 90px">SIE</h1>
                <h3>Reportes</h3>
    </div>   
    <!-- Rutas para cada sección-->
    <div class="siboton responsive">     
            <div style="display: flex; justify-content: space-between; align-items: center;">   
                <button class="button" onclick="location.href='{{route('menus.visualizacion') }}'">{{ __('Soporte Tecnico') }}</button>
                <button class="button" onclick="location.href='{{route('ventas.index') }}'">{{ __('Ventas') }}</button>
                <button class="button" onclick="location.href='{{url('/vista') }}'">Contabilidad</button>
                <button class="button" onclick="location.href='{{route('marketings.index') }}'">{{_('Márketing')}}</button>
            </div>
    </div>
      <script src="{{ asset('material') }}/js/inicio.js"></script>
</body>
</html>