@extends('layouts.app')
@section('title', "Inicio")

@section('Ini')
  <div class="card">
      <br>
    <h3> Listado de reportes</h3>
      <br>
    @livewire('reporte-index')
  </div>
@endsection
