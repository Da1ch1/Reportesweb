@csrf
<div class="row" style="align-items: center" >
    <div class="col-sm-2">
        <label style="margin-bottom: 3px" for="InputFecha_inicio" class="form-label">* Fecha Inicio</label>
        <input style="margin-left: 15px" type="text" name="Fecha_inicio" id="InputFecha_inicio" class="form-control" value="{{old('Fecha_inicio')}}">
    </div>
    <div class="col-sm-2">
        <label style="margin-bottom: 3px" for="InputFecha_fin" class="form-label">* Fecha Fin</label>
        <input style="margin-left: 5px" type="text" name="Fecha_fin" id="InputFecha_fin" class="form-control" value="{{old('Fecha_fin')}}">
    </div>
    <div class="col-sm-1">
        <label style="margin-bottom: 3px" for="InputHora_inicio" class="form-label">* Hora Inicio</label>
        <input type="text" name="Hora_inicio" id="InputHora_inicio" class="form-control" value="{{old('Hora_inicio')}}">
    </div>
    <div class="col-sm-1">
        <label style="margin-bottom: 3px" for="InputHora_fin" class="form-label"> * Hora fin</label>
        <input type="tex" name="Hora_fin" id="InputHora_fin" class="form-control" value="{{old('Hora_fin')}}">
    </div>
    <div class="col-sm-4">
        <label style="margin-bottom: 3px" for="InputCliente" class="form-label">* Cliente</label>
        <input type="text" name="Cliente" id="InputCliente" class="form-control" placeholder="..." value="{{old('Cliente')}}">
    </div>
    <div class="col-sm-4">
        <label style="margin-top: 15px" for="InputAsunto" class="form-label">* Asunto</label>
        <input style="margin-left: 15px" type="text" name="Asunto" id="InputAsunto" class="form-control" placeholder="..." value="{{old('Asunto')}}">
    </div>
    <div class="col-sm-2">
        <label style="margin-top: 15px" for="SelectEjecutivo" class="form-label">* Ejecutivo</label>
        <select style="margin-left: 5px"name="Ejecutivo" id="SelectEjecutivo" class="form-select" >
            <option value="0">Paco</option>
            <option value="1">Dante</option>
            <option value="2">Luisillo</option>
            <option value="3">Soporte</option>
        </select>
        <script>
            document.getElementById('SelectEjecutivo').value = "{{old('Ejecutivo')}}";
        </script>
    </div>
    <div class="col-sm-2">
        <label style="margin-top: 15px" for="SelectEstatus" class="form-label">* Estatus</label>
        <select style="margin-left: -5px"name="Estatus" id="SelectEstatus" class="form-select">
            <option value="0">Pendiente</option>
            <option value="1">Cancelado</option>
            <option value="2">Hecho</option>
        </select>
        <script>
            document.getElementById('SelectEstatus').value = "{{old('Estatus')}}";
        </script>
    </div>

    <div class="col-sm-4">
        <label style="margin-top: 15px" for="InputPostVenta" class="form-label">* Post-Venta</label>
        <input style="margin-left: -15px" type="text" name="PostVenta" id="InputPostVenta" class="form-control" placeholder="" value="{{old('PostVenta')}}">
    </div>
    <br>
    <div class="col-sm-9">
        <label style="margin-top: 15px" for="TextAreaEvidencia" class="form-label">* Evidencia</label>
        <textarea style="margin-left: 15px" name="Evidencia" id="TextAreaEvidencia" cols="30" rows="10" class="form-control">{{old('Evidencia')}}</textarea>
    </div>
    <div class="col-sm-4">
        <label style="margin-top: 15px" for="InputComentarios" class="form-label">* Comentarios</label>
        <input style="margin-left: 15px" type="text" name="Comentarios" id="InputComentarios" class="form-control" placeholder="" value="{{old('Comentarios')}}">
        <br>
    </div>
    <div class="col-sm-12 text-center my-2">
        <button type="submit" class="btn btn-dark">Guardar</button>
    </div>
</div>
