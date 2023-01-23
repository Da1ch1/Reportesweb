@extends('layouts.app')
@section('title', "Inicio")

@section('Ini')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
              <div class="card-header">
                  <div style="display: flex; justify-content: space-between; align-items: center;">  
                      <span id="card_title">
                          {{ __('Reportes') }}
                      </span>
                    <div class="float-right">
                        <a href="{{ route('menus.creacion') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                          {{ __('+Crear Reporte') }}
                        </a>
                      </div>
                  </div>
              </div> 
              @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif
          @livewire('reporte-index')
        </div>  
      </div>  
    </div>  
  </div>
@endsection
