@extends('layouts.contribuyente')

@section('title','Editar Contribuyente')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Contribuyente</span>
                        <a href="{{ route('contribuyentes.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                            {{ __('atras') }}
                          </a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('contribuyentes.update', $contribuyente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('contribuyente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
