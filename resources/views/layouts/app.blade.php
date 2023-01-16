<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- stilos bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">




    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet">
    @livewireStyles
</head>
<body class="bg-light">
        <!-- Barra Navegacion -->
            <section class="et-hero-tabs">

                <h1>SIE</h1>
                <h3>Reportes</h3>
                    <h6>Soporte Tecnico</h6>
                <div class="et-hero-tabs-container">
                    <a class="et-hero-tab card"  href="{{route('menus.visualizacion')}}">Visualización</a>
                    <a class="et-hero-tab card" href="{{route('menus.creacion')}}">Creación</a>
                    <!--<a class="et-hero-tab" href="#">Edición</a>-->

                </div>
            </section>
                <br>
        <!-- Contenido -->
        <div class="col-sm-12">
        @yield('contenido')
            @yield('Ini')
            @yield('edit')
        </div>
        <script src="{{ asset('material') }}/js/nav.js"></script>
    @livewireScripts
</body>
</html>

