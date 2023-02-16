@extends('layouts.prospectos')

@section('title','Crear Prospecto')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Prospecto</span>
                        <a href="{{ route('prospectos.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                            {{ __('atras') }}
                          </a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('prospectos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('prospecto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
