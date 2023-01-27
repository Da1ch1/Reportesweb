<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group col-sm-3">
            {{ Form::label('RFC') }}
            {{ Form::text('rfc', $contribuyente->rfc, ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), 'placeholder' => 'Rfc']) }}
            {!! $errors->first('rfc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre', $contribuyente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Regimen fiscal') }}
            {{ Form::text('regimenf', $contribuyente->regimenf, ['class' => 'form-control' . ($errors->has('regimenf') ? ' is-invalid' : ''), 'placeholder' => 'Regimen fiscal']) }}
            {!! $errors->first('regimenf', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Email') }}
            {{ Form::text('email', $contribuyente->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Telefono') }}
            {{ Form::text('telefono', $contribuyente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Factura contraseña') }}
            {{ Form::text('factura_contraseña', $contribuyente->factura_contraseña, ['class' => 'form-control' . ($errors->has('factura_contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Factura contraseña']) }}
            {!! $errors->first('factura_contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Nomina contraseña') }}
            {{ Form::text('nomina_contraseña', $contribuyente->nomina_contraseña, ['class' => 'form-control' . ($errors->has('nomina_contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Nomina contraseña']) }}
            {!! $errors->first('nomina_contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Vencimiento csd') }}
            {{ Form::text('vencimiento_csd', $contribuyente->vencimiento_csd, ['class' => 'form-control' . ($errors->has('vencimiento_csd') ? ' is-invalid' : ''), 'placeholder' => 'Vencimiento csd']) }}
            {!! $errors->first('vencimiento_csd', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Ciec contraseña') }}
            {{ Form::text('ciec_contraseña', $contribuyente->ciec_contraseña, ['class' => 'form-control' . ($errors->has('ciec_contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Ciec contraseña']) }}
            {!! $errors->first('ciec_contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Fiel contraseña') }}
            {{ Form::text('fiel_contraseña', $contribuyente->fiel_contraseña, ['class' => 'form-control' . ($errors->has('fiel_contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Fiel contraseña']) }}
            {!! $errors->first('fiel_contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Vencimiento fiel') }}
            {{ Form::text('vencimiento_fiel', $contribuyente->vencimiento_fiel, ['class' => 'form-control' . ($errors->has('vencimiento_fiel') ? ' is-invalid' : ''), 'placeholder' => 'Vencimiento fiel']) }}
            {!! $errors->first('vencimiento_fiel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Ev imss usuario') }}
            {{ Form::text('ev_imss_usuario', $contribuyente->ev_imss_usuario, ['class' => 'form-control' . ($errors->has('ev_imss_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Ev imss usuario']) }}
            {!! $errors->first('ev_imss_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Ev imss contraseña') }}
            {{ Form::text('ev_imss_contraseña', $contribuyente->ev_imss_contraseña, ['class' => 'form-control' . ($errors->has('ev_imss_contraseña') ? ' is-invalid' : ''), 'placeholder' => 'ev_imss_contraseña']) }}
            {!! $errors->first('ev_imss_contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('IDSE usuario') }}
            {{ Form::text('idse_usuario', $contribuyente->idse_usuario, ['class' => 'form-control' . ($errors->has('idse_usuario') ? ' is-invalid' : ''), 'placeholder' => 'IDSE usuario']) }}
            {!! $errors->first('idse_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('IDSE contraseña') }}
            {{ Form::text('idse_contraseña', $contribuyente->idse_contraseña, ['class' => 'form-control' . ($errors->has('idse_contraseña') ? ' is-invalid' : ''), 'placeholder' => 'IDSE contraseña']) }}
            {!! $errors->first('idse_contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Sipare usuario') }}
            {{ Form::text('sipare_usuario', $contribuyente->sipare_usuario, ['class' => 'form-control' . ($errors->has('sipare_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Sipare usuario']) }}
            {!! $errors->first('sipare_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Sipare contraseña') }}
            {{ Form::text('sipare_contraseña', $contribuyente->sipare_contraseña, ['class' => 'form-control' . ($errors->has('sipare_contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Sipare contraseña']) }}
            {!! $errors->first('sipare_contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('2% usuario') }}
            {{ Form::text('usuario_2', $contribuyente->usuario_2, ['class' => 'form-control' . ($errors->has('usuario_2') ? ' is-invalid' : ''), 'placeholder' => '2% usuario']) }}
            {!! $errors->first('usuario_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('2% contraseña') }}
            {{ Form::text('contraseña_2', $contribuyente->contraseña_2, ['class' => 'form-control' . ($errors->has('contraseña_2') ? ' is-invalid' : ''), 'placeholder' => '2% contraseña']) }}
            {!! $errors->first('contraseña_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Infonavit usuario') }}
            {{ Form::text('infonavit_usuario', $contribuyente->infonavit_usuario, ['class' => 'form-control' . ($errors->has('infonavit_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Infonavit usuario']) }}
            {!! $errors->first('infonavit_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Infonavit contraseña') }}
            {{ Form::text('infonavit_contraseña', $contribuyente->infonavit_contraseña, ['class' => 'form-control' . ($errors->has('infonavit_contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Infonavit contraseña']) }}
            {!! $errors->first('infonavit_contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Citas jal usuario') }}
            {{ Form::text('citas_jal_usuario', $contribuyente->citas_jal_usuario, ['class' => 'form-control' . ($errors->has('citas_jal_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Citas jal usuario']) }}
            {!! $errors->first('citas_jal_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Citas jal contraseña') }}
            {{ Form::text('citas_jal_contraseña', $contribuyente->citas_jal_contraseña, ['class' => 'form-control' . ($errors->has('citas_jal_contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Citas jal contraseña']) }}
            {!! $errors->first('citas_jal_contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Sas usuario') }}
            {{ Form::text('sas_usuario', $contribuyente->sas_usuario, ['class' => 'form-control' . ($errors->has('sas_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Sas usuario']) }}
            {!! $errors->first('sas_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Sas contraseña') }}
            {{ Form::text('sas_contraseña', $contribuyente->sas_contraseña, ['class' => 'form-control' . ($errors->has('sas_contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Sas contraseña']) }}
            {!! $errors->first('sas_contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Extra') }}
            {{ Form::text('extra', $contribuyente->extra, ['class' => 'form-control' . ($errors->has('extra') ? ' is-invalid' : ''), 'placeholder' => 'Extra']) }}
            {!! $errors->first('extra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" style="margin-top: 18px" class="btn btn-primary">Enviar</button>
    </div>
</div>