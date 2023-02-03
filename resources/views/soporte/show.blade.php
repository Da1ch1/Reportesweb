@extends('layouts.soporte')

@section('title','Ver Soporte')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Soporte</span>
                            <a href="{{ route('soportes.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                                {{ __('atras') }}
                              </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $soporte->Fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $soporte->Fecha_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Inicio:</strong>
                            {{ $soporte->Hora_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Fin:</strong>
                            {{ $soporte->Hora_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $soporte->Cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Asunto:</strong>
                            {{ $soporte->Asunto }}
                        </div>
                        <div class="form-group">
                            <strong>Ejecutivo:</strong>
                            {{ $soporte->spejecutivo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $soporte->stat->estatus }}
                        </div>
                        <div class="form-group">
                            <strong>Evidencia:</strong>
                            {{ $soporte->Evidencia }}
                        </div>
                        <div class="form-group">
                            <strong>Postventa:</strong>
                            {{ $soporte->PostVenta }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios:</strong>
                            {{ $soporte->Comentarios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
