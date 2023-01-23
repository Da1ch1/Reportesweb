@extends('layouts.app')

@section('title', "Reporte")

@section('ver') 
  <section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Ver Reporte</span>
                        <a class="btn btn-dark" style="margin-left: 15px; --bs-btn-padding-y: .28rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .67rem;" href="{{ route('ventas.index') }}"> Atras</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>Fecha Inicio:</strong>
                        {{ $reporte->Fecha_inicio->format('d-m-y') }}
                    </div>
                    <div class="form-group">
                        <strong>Fecha Fin:</strong>
                        {{ $reporte->Fecha_fin->format('d-m-y') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection

