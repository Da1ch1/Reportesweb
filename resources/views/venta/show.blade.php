@extends('layouts.ventas')

@section('title', 'Ver Venta')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Venta</span>
                            <a class="btn btn-dark" style="margin-left: 15px; --bs-btn-padding-y: .28rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .67rem;" href="{{ route('ventas.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $venta->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Dia:</strong>
                            {{ $venta->Dia }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto:</strong>
                            {{ $venta->Contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Actividad:</strong>
                            {{ $venta->Actividad }}
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
                            <strong>Sin costo:</strong>
                            {{ $venta->Sincosto }}
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
                            <strong>Sistema2:</strong>
                            {{ $venta->Sistema2 }}
                        </div>
                        <div class="form-group">
                            <strong>Soporte2:</strong>
                            {{ $venta->Soporte2 }}
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