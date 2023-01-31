@extends('layouts.contribuyente')

@section('title','Avance')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!--El contenido se encuentra en la carpeta resources/livewire/avance-index y  la linea de abajo hace llamado a esa vista-->
                @livewire('avance-index')
                {!! $avances->links() !!}
            </div>
        </div>
    </div>
@endsection
