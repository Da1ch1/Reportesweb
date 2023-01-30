@extends('layouts.ventas')

@section('title','Ver Venta')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Venta</span>
                            <a href="{{ route('ventas.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                                {{ __('atras') }}
                              </a>
                        </div>
                        
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $venta->cliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Dia:</strong>
                            {{ $venta->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto:</strong>
                            {{ $venta->contacto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Actividad:</strong>
                            {{ $venta->actividade->actividad }}
                        </div>
                        <div class="form-group">
                            <strong>Proceso actividad:</strong>
                            {{ $venta->Procesoactividad }}
                        </div>
                        <div class="form-group">
                            <strong>Atendio:</strong>
                            {{ $venta->Atendio }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $venta->costo->costos }}
                        </div>
                        <div class="form-group">
                            <strong>N° factura:</strong>
                            {{ $venta->Nfactura }}
                        </div>
                        <div class="form-group">
                            <strong>Poliza:</strong>
                            {{ $venta->Poliza }}
                        </div>
                        <div class="form-group">
                            <strong>Horario:</strong>
                            {{ $venta->Horario }}
                        </div>
                        <div class="form-group">
                            <strong>Sistemas:</strong>
                            {{ $venta->Sistemas }}
                        </div>
                        <div class="form-group">
                            <strong>Soporte:</strong>
                            {{ $venta->Soporte }}
                        </div>
                        <div class="form-group">
                            <strong>Contabilidad:</strong>
                            {{ $venta->Contabilidad }}
                        </div>
                        <div class="form-group">
                            <strong>Programacion:</strong>
                            {{ $venta->Programacion }}
                        </div>
                        <div class="form-group">
                            <strong>Diseño:</strong>
                            {{ $venta->Diseño }}
                        </div>
                        <div class="form-group">
                            <strong>Mkt:</strong>
                            {{ $venta->MKT }}
                        </div>
                        <div class="form-group">
                            <strong>Nom:</strong>
                            {{ $venta->Nom }}
                        </div>
                        <div class="form-group">
                            <strong>Equipos:</strong>
                            {{ $venta->Equipos }}
                        </div>
                        <div class="form-group">
                            <strong>Antivirus:</strong>
                            {{ $venta->Antivirus }}
                        </div>
                        <div class="form-group">
                            <strong>Cursos:</strong>
                            {{ $venta->Cursos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
