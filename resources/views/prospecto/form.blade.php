<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group col-sm-3">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $prospecto->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Contacto') }}
            {{ Form::text('Contacto', $prospecto->Contacto, ['class' => 'form-control' . ($errors->has('Contacto') ? ' is-invalid' : ''), 'placeholder' => 'Contacto']) }}
            {!! $errors->first('Contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Servicio') }}
            {{ Form::text('Servicio', $prospecto->Servicio, ['class' => 'form-control' . ($errors->has('Servicio') ? ' is-invalid' : ''), 'placeholder' => 'Servicio']) }}
            {!! $errors->first('Servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Medio_contacto') }}
            {{ Form::text('Medio_contacto',  $prospecto->Medio_contacto, ['class' => 'form-control' . ($errors->has('Medio_contacto') ? ' is-invalid' : ''), 'placeholder' => 'Medio Contacto']) }}
            {!! $errors->first('Medio_contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('seguimiento') }}
            {{ Form::select('seguimiento_id', $seguimientos, $prospecto->seguimiento_id, ['class' => 'form-control' . ($errors->has('seguimiento_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('seguimiento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('agente') }}
            {{ Form::select('agente_id', $agentes, $prospecto->agente_id, ['class' => 'form-control' . ($errors->has('agente_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('agente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $prospecto->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button style="margin-top: 18px" type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>