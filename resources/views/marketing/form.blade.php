<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group col-sm-3">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $marketing->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('actividad') }}
            {{ Form::text('actividad', $marketing->actividad, ['class' => 'form-control' . ($errors->has('actividad') ? ' is-invalid' : ''), 'placeholder' => 'Actividad']) }}
            {!! $errors->first('actividad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Red social') }}
            <select name="red_social" id="Selectred_social" class="form-select">
                <option value="0">Whatsapp</option>
                <option value="1">Facebook</option>
                <option value="2">Tik tok</option>
                <option value="3">Instagram</option>
                <option value="4">Youtube</option>
            </select>
            <script>
                document.getElementById('Selectred_social').value = "{{old('red_social')}}";
            </script>
            {!! $errors->first('red_social', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Ejecutivo') }}
            {{ Form::select('mkejecutivo_id', $mkejecutivos,$marketing->mkejecutivo_id, ['class' => 'form-control' . ($errors->has('mkejecutivo_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('mkejecutivo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('estatus') }}
                <select name="estatus" id="SelectEstatus" class="form-select">
                    <option value="0">Pendiente</option>
                    <option value="1">Cancelado</option>
                    <option value="2">Hecho</option>
                </select>
                <script>
                    document.getElementById('SelectEstatus').value = "{{old('estatus')}}";
                </script>
            {!! $errors->first('estatus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('comentarios') }}
            {{ Form::text('comentarios', $marketing->comentarios, ['class' => 'form-control' . ($errors->has('comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
            {!! $errors->first('comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button style="margin-top: 18px" type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>