@extends('layouts.prospectos')

@section('title','Ver Prospecto')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Prospecto</span>
                            <a href="{{ route('prospectos.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                                {{ __('atras') }}
                              </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $prospecto->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto:</strong>
                            {{ $prospecto->Contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $prospecto->Servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Medio Contacto:</strong>
                            {{ $prospecto->Medio_contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Seguimientos:</strong>
                            {{ $prospecto->seguimiento->seguimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Agente:</strong>
                            {{ $prospecto->agente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $prospecto->Fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
