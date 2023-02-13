<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!--Links de exportacion Excel-->
    <link href="{{ asset('material') }}/demo/excel.css" rel="stylesheet">
    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="card-body">
    
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <button type="button" class="btn btn-dark" onclick="location.href='{{url('/Sie') }}'" style="--bs-btn-padding-y: .39rem; --bs-btn-padding-x: .9rem; --bs-btn-font-size: .59rem; ">Home</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div  class=" nav collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="bar navbar-nav ms-auto" >
                            <li class="nav-item">
                                <a class="te nav-link" href="{{ route('contribuyentes.index') }}">{{ __('Contribuyentes') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="te nav-link" href="{{ route('regimens.index') }}">{{ __('Regimen fiscal') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="te nav-link" href="{{ route('avances.index') }}">{{ __('Avances') }}</a>
                            </li>
                           
                             
                            <!-- Links de Registro -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
      <div class="card" style="margin: 18px">  
        <section class="et-hero-tabs">   
            <h1>CORPORATIVO</h1>
            <h1>SIE</h1>
            <h3>Solución Integral Empresarial</h3>
                <h6>Contabilidad</h6> 
        </section>
      </div>  
        <main class="py-4">
            @yield('content')
        </main>
        @livewireScripts
    </div>
    <script src="{{ asset('material') }}/js/nav.js"></script>
</body>
</html>

