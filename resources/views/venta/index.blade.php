@extends('layouts.ventas')

@section('title','Ventas')

@section('content')
    <div class=" container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!--El contenido se encuentra en la carpeta resources/livewire/venta-index y  la linea de abajo hace llamado a esa vista-->
                @livewire('venta-index')
                {!! $ventas->links() !!}
            </div>
        </div>
    </div>
@endsection
