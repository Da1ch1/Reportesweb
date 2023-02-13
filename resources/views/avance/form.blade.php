<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group col-sm-3">
            {{ Form::label('Elegir RFC') }}
            {{ Form::select('contribuyente_id', $contribuyentes, $avance->contribuyente_id, ['class' => 'form-control' . ($errors->has('contribuyente_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('contribuyente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('mes') }}
            <select name="mes" id="Selectmes" class="form-select">
                <option value="0">Enero</option>
                <option value="1">Febrero</option>
                <option value="2">Marzo</option>
                <option value="3">Abril</option>
                <option value="4">Mayo</option>
                <option value="5">Junio</option>
                <option value="6">Julio</option>
                <option value="7">Agosto</option>
                <option value="8">Septiembre</option>
                <option value="9">Octubre</option>
                <option value="10">Noviembre</option>
                <option value="11">Diciembre</option>
            </select>
            <script>
                document.getElementById('Selectmes').value = "{{old('mes')}}";
            </script>
            {!! $errors->first('mes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('estatus') }}
            <select name="estatus" id="Selectestatus" class="form-select">
                <option value="0">Terminado</option>
                <option value="1">Pendiente</option>
                
            </select>
            <script>
                document.getElementById('Selectestatus').value = "{{old('estatus')}}";
            </script>
            {!! $errors->first('estatus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $avance->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('pendientes') }}
            {{ Form::text('pendientes', $avance->pendientes, ['class' => 'form-control' . ($errors->has('pendientes') ? ' is-invalid' : ''), 'placeholder' => 'Pendientes']) }}
            {!! $errors->first('pendientes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" style="margin-top: 18px" class="btn btn-primary">Enviar</button>
    </div>
</div>