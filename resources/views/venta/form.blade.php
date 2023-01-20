<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cliente') }}
            {{ Form::text('cliente_id', $venta->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dia') }}
            {{ Form::text('Dia', $venta->Dia, ['class' => 'form-control' . ($errors->has('Dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {!! $errors->first('Dia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contacto') }}
            {{ Form::text('Contacto', $venta->Contacto, ['class' => 'form-control' . ($errors->has('Contacto') ? ' is-invalid' : ''), 'placeholder' => 'Contacto']) }}
            {!! $errors->first('Contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Actividad') }}
            {{ Form::text('Actividad', $venta->Actividad, ['class' => 'form-control' . ($errors->has('Actividad') ? ' is-invalid' : ''), 'placeholder' => 'Actividad']) }}
            {!! $errors->first('Actividad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Proceso actividad') }}
            {{ Form::text('Procesoactividad', $venta->Procesoactividad, ['class' => 'form-control' . ($errors->has('Procesoactividad') ? ' is-invalid' : ''), 'placeholder' => 'Procesoactividad']) }}
            {!! $errors->first('Procesoactividad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Atendio') }}
            {{ Form::text('Atendio', $venta->Atendio, ['class' => 'form-control' . ($errors->has('Atendio') ? ' is-invalid' : ''), 'placeholder' => 'Atendio']) }}
            {!! $errors->first('Atendio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sin costo') }}
            {{ Form::text('Sincosto', $venta->Sincosto, ['class' => 'form-control' . ($errors->has('Sincosto') ? ' is-invalid' : ''), 'placeholder' => 'Sincosto']) }}
            {!! $errors->first('Sincosto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° factura') }}
            {{ Form::text('Nfactura', $venta->Nfactura, ['class' => 'form-control' . ($errors->has('Nfactura') ? ' is-invalid' : ''), 'placeholder' => 'Nfactura']) }}
            {!! $errors->first('Nfactura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Poliza') }}
            {{ Form::text('Poliza', $venta->Poliza, ['class' => 'form-control' . ($errors->has('Poliza') ? ' is-invalid' : ''), 'placeholder' => 'Poliza']) }}
            {!! $errors->first('Poliza', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horario') }}
            {{ Form::text('Horario', $venta->Horario, ['class' => 'form-control' . ($errors->has('Horario') ? ' is-invalid' : ''), 'placeholder' => 'Horario']) }}
            {!! $errors->first('Horario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistemas') }}
            {{ Form::text('Sistemas', $venta->Sistemas, ['class' => 'form-control' . ($errors->has('Sistemas') ? ' is-invalid' : ''), 'placeholder' => 'Sistemas']) }}
            {!! $errors->first('Sistemas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Soporte') }}
            {{ Form::text('Soporte', $venta->Soporte, ['class' => 'form-control' . ($errors->has('Soporte') ? ' is-invalid' : ''), 'placeholder' => 'Soporte']) }}
            {!! $errors->first('Soporte', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema2') }}
            {{ Form::text('Sistema2', $venta->Sistema2, ['class' => 'form-control' . ($errors->has('Sistema2') ? ' is-invalid' : ''), 'placeholder' => 'Sistema2']) }}
            {!! $errors->first('Sistema2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Soporte2') }}
            {{ Form::text('Soporte2', $venta->Soporte2, ['class' => 'form-control' . ($errors->has('Soporte2') ? ' is-invalid' : ''), 'placeholder' => 'Soporte2']) }}
            {!! $errors->first('Soporte2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contabilidad') }}
            {{ Form::text('Contabilidad', $venta->Contabilidad, ['class' => 'form-control' . ($errors->has('Contabilidad') ? ' is-invalid' : ''), 'placeholder' => 'Contabilidad']) }}
            {!! $errors->first('Contabilidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Programacion') }}
            {{ Form::text('Programacion', $venta->Programacion, ['class' => 'form-control' . ($errors->has('Programacion') ? ' is-invalid' : ''), 'placeholder' => 'Programacion']) }}
            {!! $errors->first('Programacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Diseño') }}
            {{ Form::text('Diseño', $venta->Diseño, ['class' => 'form-control' . ($errors->has('Diseño') ? ' is-invalid' : ''), 'placeholder' => 'Diseño']) }}
            {!! $errors->first('Diseño', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MKT') }}
            {{ Form::text('MKT', $venta->MKT, ['class' => 'form-control' . ($errors->has('MKT') ? ' is-invalid' : ''), 'placeholder' => 'Mkt']) }}
            {!! $errors->first('MKT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nom') }}
            {{ Form::text('Nom', $venta->Nom, ['class' => 'form-control' . ($errors->has('Nom') ? ' is-invalid' : ''), 'placeholder' => 'Nom']) }}
            {!! $errors->first('Nom', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Equipos') }}
            {{ Form::text('Equipos', $venta->Equipos, ['class' => 'form-control' . ($errors->has('Equipos') ? ' is-invalid' : ''), 'placeholder' => 'Equipos']) }}
            {!! $errors->first('Equipos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Antivirus') }}
            {{ Form::text('Antivirus', $venta->Antivirus, ['class' => 'form-control' . ($errors->has('Antivirus') ? ' is-invalid' : ''), 'placeholder' => 'Antivirus']) }}
            {!! $errors->first('Antivirus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cursos') }}
            {{ Form::text('Cursos', $venta->Cursos, ['class' => 'form-control' . ($errors->has('Cursos') ? ' is-invalid' : ''), 'placeholder' => 'Cursos']) }}
            {!! $errors->first('Cursos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>