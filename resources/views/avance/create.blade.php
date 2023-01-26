@extends('layouts.contribuyente')

@section('title','Crear Avance')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Avance</span>
                        <a href="{{ route('avances.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                            {{ __('atras') }}
                          </a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('avances.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('avance.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
