@extends('layouts.soporte')

@section('title','Crear Soporte')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Soporte</span>
                        <a href="{{ route('soportes.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                            {{ __('atras') }}
                          </a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('soportes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('soporte.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
