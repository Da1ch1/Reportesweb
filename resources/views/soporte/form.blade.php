<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group col-sm-3">
            {{ Form::label('Fecha_inicio') }}
            {{ Form::text('Fecha_inicio', $soporte->Fecha_inicio, ['class' => 'form-control' . ($errors->has('Fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('Fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Fecha_fin') }}
            {{ Form::text('Fecha_fin', $soporte->Fecha_fin, ['class' => 'form-control' . ($errors->has('Fecha_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
            {!! $errors->first('Fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Hora_inicio') }}
            {{ Form::text('Hora_inicio', $soporte->Hora_inicio, ['class' => 'form-control' . ($errors->has('Hora_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio']) }}
            {!! $errors->first('Hora_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Hora_fin') }}
            {{ Form::text('Hora_fin', $soporte->Hora_fin, ['class' => 'form-control' . ($errors->has('Hora_fin') ? ' is-invalid' : ''), 'placeholder' => 'Hora Fin']) }}
            {!! $errors->first('Hora_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Cliente') }}
            {{ Form::text('Cliente', $soporte->Cliente, ['class' => 'form-control' . ($errors->has('Cliente') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('Cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Asunto') }}
            {{ Form::text('Asunto', $soporte->Asunto, ['class' => 'form-control' . ($errors->has('Asunto') ? ' is-invalid' : ''), 'placeholder' => 'Asunto']) }}
            {!! $errors->first('Asunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Ejecutivo') }}
            {{ Form::select('spejecutivo_id', $spejecutivos, $soporte->spejecutivo_id, ['class' => 'form-control' . ($errors->has('spejecutivo_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('spejecutivo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Estatus') }}
            {{ Form::select('stat_id', $stats, $soporte->stat_id, ['class' => 'form-control' . ($errors->has('stat_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('stat_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Evidencia') }}
            {{ Form::text('Evidencia', $soporte->Evidencia, ['class' => 'form-control' . ($errors->has('Evidencia') ? ' is-invalid' : ''), 'placeholder' => 'Evidencia']) }}
            {!! $errors->first('Evidencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('PostVenta') }}
            {{ Form::text('PostVenta', $soporte->PostVenta, ['class' => 'form-control' . ($errors->has('PostVenta') ? ' is-invalid' : ''), 'placeholder' => 'Postventa']) }}
            {!! $errors->first('PostVenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Comentarios') }}
            {{ Form::text('Comentarios', $soporte->Comentarios, ['class' => 'form-control' . ($errors->has('Comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
            {!! $errors->first('Comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button style="margin-top: 18px" type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>