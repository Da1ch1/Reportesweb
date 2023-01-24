<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group col-sm-3">
            {{ Form::label('cliente') }}
            {{ Form::select('cliente_id', $clientes,$venta->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Dia') }}
            {{ Form::text('Dia', $venta->Dia, ['class' => 'form-control' . ($errors->has('Dia') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Dia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-4">
            {{ Form::label('contacto') }}
            {{ Form::select('contacto_id', $contactos, $venta->contacto_id, ['class' => 'form-control' . ($errors->has('contacto_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('contacto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-4">
            {{ Form::label('actividad') }}
            {{ Form::select('actividad_id', $actividades, $venta->actividad_id, ['class' => 'form-control' . ($errors->has('actividad_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('actividad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Proceso actividad') }}
            {{ Form::text('Procesoactividad', $venta->Procesoactividad, ['class' => 'form-control' . ($errors->has('Procesoactividad') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Procesoactividad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Vendedor') }}
            {{ Form::text('Vendedor', $venta->Vendedor, ['class' => 'form-control' . ($errors->has('Vendedor') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Vendedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Atendio') }}
            {{ Form::text('Atendio', $venta->Atendio, ['class' => 'form-control' . ($errors->has('Atendio') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Atendio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-4">
            {{ Form::label('costos') }}
            {{ Form::select('costo_id', $costos, $venta->costo_id, ['class' => 'form-control' . ($errors->has('costo_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('costo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('N° factura') }}
            {{ Form::text('Nfactura', $venta->Nfactura, ['class' => 'form-control' . ($errors->has('Nfactura') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Nfactura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Poliza') }}
            {{ Form::text('Poliza', $venta->Poliza, ['class' => 'form-control' . ($errors->has('Poliza') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Poliza', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Horario') }}
            {{ Form::text('Horario', $venta->Horario, ['class' => 'form-control' . ($errors->has('Horario') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Horario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Sistemas') }}
            {{ Form::text('Sistemas', $venta->Sistemas, ['class' => 'form-control' . ($errors->has('Sistemas') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Sistemas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Soporte') }}
            {{ Form::text('Soporte', $venta->Soporte, ['class' => 'form-control' . ($errors->has('Soporte') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Soporte', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Contabilidad') }}
            {{ Form::text('Contabilidad', $venta->Contabilidad, ['class' => 'form-control' . ($errors->has('Contabilidad') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Contabilidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Programacion') }}
            {{ Form::text('Programacion', $venta->Programacion, ['class' => 'form-control' . ($errors->has('Programacion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Programacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Diseño') }}
            {{ Form::text('Diseño', $venta->Diseño, ['class' => 'form-control' . ($errors->has('Diseño') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Diseño', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('MKT') }}
            {{ Form::text('MKT', $venta->MKT, ['class' => 'form-control' . ($errors->has('MKT') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('MKT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Nom') }}
            {{ Form::text('Nom', $venta->Nom, ['class' => 'form-control' . ($errors->has('Nom') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Nom', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Equipos') }}
            {{ Form::text('Equipos', $venta->Equipos, ['class' => 'form-control' . ($errors->has('Equipos') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Equipos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Antivirus') }}
            {{ Form::text('Antivirus', $venta->Antivirus, ['class' => 'form-control' . ($errors->has('Antivirus') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Antivirus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Cursos') }}
            {{ Form::text('Cursos', $venta->Cursos, ['class' => 'form-control' . ($errors->has('Cursos') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Cursos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20" style="margin-top: 18px">
        <button type="submit" class="btn btn-dark">Enviar</button>
    </div>
</div>