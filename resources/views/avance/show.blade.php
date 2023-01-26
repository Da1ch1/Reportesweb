@extends('layouts.contribuyente')

@section('title','Ver Avance')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Avance</span>
                            <a href="{{ route('avances.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                                {{ __('atras') }}
                              </a>
                        </div>
                        
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $avance->contribuyente->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $avance->contribuyente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Regimen Fiscal:</strong>
                            {{ $avance->contribuyente->regimenf }}
                        </div>
                        <div class="form-group">
                            <strong>Mes:</strong>
                            {{ $avance->mes() }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $avance->estatus() }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $avance->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Pendientes:</strong>
                            {{ $avance->pendientes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
