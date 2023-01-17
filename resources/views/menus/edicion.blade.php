@extends('layouts.app')

@section('title', "Editar")

@section('edit')
   <div class="card">
       <div >
           <br>
    <h3>
        Editar Reporte  " <i>{{$reporte->Cliente}}</i>,<i>{{$reporte->id}}</i> "
    </h3>
           <br>
       </div>

    <form action="{{route('menus.update', $reporte)}}" method="POST">
        @method('put')
        <div class="card-body">
        @csrf
        <div class="row">
            <div class="col-sm-2">
                <label for="InputFecha_inicio" class="form-label">* Fecha Inicio</label>
                <input type="text" name="Fecha_inicio" id="InputFecha_inicio" class="form-control" value="{{old('Fecha_inicio',$reporte->Fecha_inicio->format('d-m-y'))}}">
            </div>
            <div class="col-sm-2">
                <label for="InputFecha_fin" class="form-label">* Fecha Fin</label>
                <input type="text" name="Fecha_fin" id="InputFecha_fin" class="form-control" value="{{old('Fecha_fin', $reporte->Fecha_fin->format('d-m-y'))}}">
            </div>
            <div class="col-sm-1">
                <label for="InputHora_inicio" class="form-label">* Hora Inicio</label>
                <input type="text" name="Hora_inicio" id="InputHora_inicio" class="form-control" value="{{old('Hora_inicio',$reporte->Hora_inicio)}}">
            </div>
            <div class="col-sm-1">
                <label for="InputHora_fin" class="form-label">* Hora fin</label>
                <input type="tex" name="Hora_fin" id="InputHora_fin" class="form-control" value="{{old('Hora_fin', $reporte->Hora_fin)}}">
            </div>
            <div class="col-sm-4">
                <label for="InputCliente" class="form-label">* Cliente</label>
                <input type="text" name="Cliente" id="InputCliente" class="form-control" placeholder="..." value="{{old('Cliente', $reporte->Cliente)}}">
            </div>
            <div class="col-sm-4">
                <label for="InputAsunto" class="form-label">* Asunto</label>
                <input type="text" name="Asunto" id="InputAsunto" class="form-control" placeholder="..." value="{{old('Asunto', $reporte->Asunto)}}">
            </div>
            <div class="col-sm-2">
                <label for="SelectEjecutivo" class="form-label">* Ejecutivo</label>
                <select name="Ejecutivo" id="SelectEjecutivo" class="form-select">
                    <option value="0">Paco</option>
                    <option value="1">Dante</option>
                    <option value="2">Luisillo</option>
                    <option value="3">Soporte</option>
                </select>
                <script>
                    document.getElementById('SelectEjecutivo').value = "{{old('Ejecutivo', $reporte->Ejecutivo)}}";
                </script>
            </div>
            <div class="col-sm-2">
                <label for="SelectEstatus" class="form-label">* Estatus</label>
                <select name="Estatus" id="SelectEstatus" class="form-select">
                    <option value="0">Pendiente</option>
                    <option value="1">Cancelado</option>
                    <option value="2">Hecho</option>
                </select>
                <script>
                    document.getElementById('SelectEstatus').value = "{{old('Estatus', $reporte->Estatus)}}";
                </script>
            </div>

            <div class="col-sm-4">
                <label for="InputPostVenta" class="form-label">* Post-Venta</label>
                <input type="text" name="PostVenta" id="InputPostVenta" class="form-control" placeholder="" value="{{old('PostVenta', $reporte->PostVenta)}}">
            </div>
            <br>
            <div class="col-sm-9">
                <label for="TextAreaEvidencia" class="form-label">* Evidencia</label>
                <textarea  name="Evidencia" id="TextAreaEvidencia" cols="30" rows="10" class="form-control">{{old('Evidencia', $reporte->Evidencia)}}</textarea>
            </div>
            <div class="col-sm-4">
                <label for="InputComentarios" class="form-label">* Comentarios</label>
                <input type="text" name="Comentarios" id="InputComentarios" class="form-control" placeholder="" value="{{old('Comentarios', $reporte->Comentarios)}}">
                <br>
            </div>
            <div class="col-sm-12 text-center my-lg-2">
                <button type="submit" class="btn btn-dark">Guardar</button>
            </div>
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
   </div>
@endsection
