@extends('layouts.ventas')

@section('title','Ver Costo')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Costo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('costos.index') }}"> Back</a>
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
