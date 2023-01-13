@extends('layouts.app')

@section('title', "Crear")

@section('contenido')
    <br>
    <h3>
        Crear Reporte
    </h3>
    <br>
    <form action="{{route('menus.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-2">
                <label for="InputFecha_inicio" class="form-label">* Fecha Inicio</label>
                <input type="date" name="Fecha_inicio" id="InputFecha_inicio" class="form-control" value="{{old('Fecha_inicio')}}">
            </div>
            <div class="col-sm-1">
                <label for="InputHora_inicio" class="form-label">* Hora Inicio</label>
                <input type="time" name="Hora_inicio" id="InputHora_inicio" class="form-control" value="{{old('Hora_inicio')}}">
            </div>
            <div class="col-sm-4">
                <label for="InputCliente" class="form-label">* Cliente</label>
                <input type="text" name="Cliente" id="InputCliente" class="form-control" placeholder="..." value="{{old('Cliente')}}">
            </div>
            <div class="col-sm-4">
                <label for="InputEjecutivo" class="form-label">* Ejecutivo</label>
                <input type="text" name="Ejecutivo" id="InputEjecutivo" class="form-control" placeholder="..." value="{{old('Ejecutivo')}}">
            </div>
            <div class="col-sm-4">
                <label for="SelectEstatus" class="form-label">* Estatus</label>
                <select name="Estatus" id="SelectEstatus" class="form-select">
                    <option value="0">Pendiente</option>
                    <option value="1">En Proceso</option>
                    <option value="2">Hecho</option>
                </select>
                <script>
                    document.getElementById('SelectEstatus').value = "{{old('Estatus')}}";
                </script>
            </div>
            <div class="col-sm-4">
                <label for="InputAsunto" class="form-label">* Asunto</label>
                <input type="text" name="Asunto" id="InputAsunto" class="form-control" placeholder="..." value="{{old('Asunto')}}">
            </div>
            <div class="col-sm-4">
                <label for="InputPost-venta" class="form-label">* Post-Venta</label>
                <input type="text" name="Post-Venta" id="InputPost-venta" class="form-control" placeholder="" value="{{old('Post-Venta')}}">
            </div>
            <br>
            <div class="col-sm-9">
                <label for="TextAreaEvidencia" class="form-label">* Evidencia</label>
                <textarea  name="Evidencia" id="TextAreaEvidencia" cols="30" rows="10" class="form-control">{{old('Evidencia')}}</textarea>
            </div>
            <div class="col-sm-4">
                <label for="InputComentario" class="form-label">* Comentario</label>
                <input type="text" name="Comentario" id="InputComentario" class="form-control" placeholder="" value="{{old('Comentario')}}">
                <br>
            </div>
            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
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
