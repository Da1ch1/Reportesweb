<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('rfc') }}
            {{ Form::text('rfc', $contribuyente->rfc, ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), 'placeholder' => 'Rfc']) }}
            {!! $errors->first('rfc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $contribuyente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('regimen fiscal') }}
            {{ Form::text('regimenf', $contribuyente->regimenf, ['class' => 'form-control' . ($errors->has('regimenf') ? ' is-invalid' : ''), 'placeholder' => 'Regimen fiscal']) }}
            {!! $errors->first('regimenf', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" style="margin-top: 18px" class="btn btn-primary">Enviar</button>
    </div>
</div>