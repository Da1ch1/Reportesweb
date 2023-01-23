@extends('layouts.app')

@section('title', "Crear")

@section('contenido')
   <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Reporte</span>
                        <a href="{{ route('menus.visualizacion') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                            {{ __('Reportes') }}
                          </a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('menus.store')}}" method="POST">
                            <x-reporte-form-body/>
                        </form>
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
   </section>
@endsection
