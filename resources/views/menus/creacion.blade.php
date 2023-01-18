@extends('layouts.app')

@section('title', "Crear")

@section('contenido')
   <div class="card">
    <br>
    <h3>
        Crear Reporte
    </h3>
    <br>

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
@endsection
