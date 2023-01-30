@extends('layouts.marketing')

@section('title','Crear Marketing')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Marketing</span>
                        <a href="{{ route('marketings.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                            {{ __('atras') }}
                          </a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('marketings.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('marketing.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
