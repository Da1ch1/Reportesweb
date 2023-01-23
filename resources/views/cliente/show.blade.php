@extends('layouts.ventas')

@section('title', 'Ver Cliente')
   

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Cliente</span>
                            <a class="btn btn-dark" href="{{ route('clientes.index') }}" style="margin-left:  17px"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
