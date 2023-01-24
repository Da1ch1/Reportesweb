@extends('layouts.ventas')

@section('title','Editar Costo')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Costo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('costos.update', $costo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('costo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
