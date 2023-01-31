@extends('layouts.contribuyente')

@section('title','Contribuyente')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!--El contenido se encuentra en la carpeta resources/livewire/contribuyente-index y  la linea de abajo hace llamado a esa vista-->
                @livewire('contribuyente-index')
                {!! $contribuyentes->links() !!}
            </div>
        </div>
    </div>
@endsection
