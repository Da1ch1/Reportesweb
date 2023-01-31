<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('regimenfiscal') }}
            {{ Form::text('regimenfiscal', $regimen->regimenfiscal, ['class' => 'form-control' . ($errors->has('regimenfiscal') ? ' is-invalid' : ''), 'placeholder' => 'Regimenfiscal']) }}
            {!! $errors->first('regimenfiscal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button style="margin-top: 18px" type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>