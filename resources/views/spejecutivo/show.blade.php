@extends('layouts.app')

@section('template_title')
    {{ $spejecutivo->name ?? 'Show Spejecutivo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Spejecutivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('spejecutivos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $spejecutivo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $spejecutivo->estatus }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
