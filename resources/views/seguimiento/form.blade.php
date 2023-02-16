<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group col-sm-3">
            {{ Form::label('seguimiento') }}
            {{ Form::text('seguimiento', $seguimiento->seguimiento, ['class' => 'form-control' . ($errors->has('seguimiento') ? ' is-invalid' : ''), 'placeholder' => 'Seguimiento']) }}
            {!! $errors->first('seguimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button style="margin-top: 18px" type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>