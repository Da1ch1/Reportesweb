@extends('layouts.ventas')

@section('title','Crear Costo')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Costo</span>
                        <a href="{{ route('costos.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                            {{ __('atras') }}
                          </a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('costos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('costo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
