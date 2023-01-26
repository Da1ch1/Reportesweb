@extends('layouts.ventas')

@section('title','Ver Costo')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Costo</span>
                            <a href="{{ route('costos.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                                {{ __('atras') }}
                              </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Costos:</strong>
                            {{ $costo->costos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
