@extends('layouts.app')

@section('title', "Editar")

@section('editar')
    <br>
    <h3>
        Editar Reporte <i>{{$reporte->id}}</i><i>{{$reporte->Cliente}}</i>
    </h3>
    <br>
    <form action="{{route('menus.store')}}" method="POST">
        <x-reporte-form-body :reporte="$reporte"/>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

