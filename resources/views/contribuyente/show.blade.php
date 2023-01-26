@extends('layouts.contribuyente')

@section('title','Ver Contribuyente')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Contribuyente</span>
                            <a href="{{ route('contribuyentes.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                                {{ __('atras') }}
                              </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $contribuyente->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $contribuyente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Regimen Fiscal:</strong>
                            {{ $contribuyente->regimenf }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
