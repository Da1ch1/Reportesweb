@extends('layouts.soporte')

@section('title','Soporte')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!--El contenido se encuentra en la carpeta resources/livewire/reporte-index y  la linea de abajo hace llamado a esa vista-->
        @livewire('reporte-index') 
                {!! $soportes->links() !!}
            </div>
        </div>
    </div>
@endsection