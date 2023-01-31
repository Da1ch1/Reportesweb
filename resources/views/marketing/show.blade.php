@extends('layouts.marketing')

@section('title','Ver Marketing')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Marketing</span>
                            <a href="{{ route('marketings.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                                {{ __('atras') }}
                              </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $marketing->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Actividad:</strong>
                            {{ $marketing->actividad }}
                        </div>
                        <div class="form-group">
                            <strong>Red Social:</strong>
                            {{ $marketing->red_social() }}
                        </div>
                        <div class="form-group">
                            <strong>Mkejecutivo:</strong>
                            {{ $marketing->mkejecutivo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $marketing->estatus() }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios:</strong>
                            {{ $marketing->comentarios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
