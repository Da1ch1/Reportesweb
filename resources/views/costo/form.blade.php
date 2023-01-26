<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('costos') }}
            {{ Form::text('costos', $costo->costos, ['class' => 'form-control' . ($errors->has('costos') ? ' is-invalid' : ''), 'placeholder' => 'Costos']) }}
            {!! $errors->first('costos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" style="margin-top: 18px" class="btn btn-primary">Enviar</button>
    </div>
</div>