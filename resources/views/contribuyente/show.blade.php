@extends('layouts.contribuyente')

@section('title','Ver Contribuyente')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Contribuyente</span>
                            <a href="{{ route('contribuyentes.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                                {{ __('atras') }}
                              </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $contribuyente->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $contribuyente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Regimen Fiscal:</strong>
                            {{ $contribuyente->regimenf }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $contribuyente->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $contribuyente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Factura contraseña:</strong>
                            {{ $contribuyente->factura_contraseña}}
                        </div>
                        <div class="form-group">
                            <strong>Nom contraseña:</strong>
                            {{ $contribuyente->nomina_contraseña }}
                        </div>
                        <div class="form-group">
                            <strong>Vencimiento CSD:</strong>
                            {{ $contribuyente->vencimiento_csd }}
                        </div>
                        <br>
                        <div class="form-group"><strong style="color: green">SAT</strong></div>
                        <div class="form-group">
                            <strong>CIEC contraseña:</strong>
                            {{ $contribuyente->ciec_contraseña }}
                        </div>
                        <div class="form-group">
                            <strong>Fiel contraseña:</strong>
                            {{ $contribuyente->fiel_contraseña }}
                        </div>
                        <div class="form-group">
                            <strong>Vencimiento fiel:</strong>
                            {{ $contribuyente->vencimiento_fiel }}
                        </div>
                        <br>
                        <div class="form-group"><strong style="color: green">IMSS</strong></div>
                        <div class="form-group">
                            <strong>Usuario imss:</strong>
                            {{ $contribuyente->ev_imss_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña imss:</strong>
                            {{ $contribuyente->ev_imss_contraseña }}
                        </div>
                        <br>
                        <div class="form-group"><strong style="color: green">IDSE</strong></div>
                        <div class="form-group">
                            <strong>Usuario idse:</strong>
                            {{ $contribuyente->idse_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña idse:</strong>
                            {{ $contribuyente->idse_contraseña}}
                        </div>
                        <br>
                        <div class="form-group"><strong style="color: green">SIPARE</strong></div>
                        <div class="form-group">
                            <strong>Usuario sipare:</strong>
                            {{ $contribuyente->sipare_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña sipare:</strong>
                            {{ $contribuyente->sipare_contraseña }}
                        </div>
                        <br>
                        <div class="form-group"><strong style="color: green">2% NOM</strong></div>
                        <div class="form-group">
                            <strong>Usuario nom:</strong>
                            {{ $contribuyente->usuario_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña nom:</strong>
                            {{ $contribuyente->contraseña_2 }}
                        </div>
                        <br>
                        <div class="form-group"><strong style="color: green">INFONAVIT</strong></div>
                        <div class="form-group">
                            <strong>Usuario inf:</strong>
                            {{ $contribuyente->infonavit_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña inf:</strong>
                            {{ $contribuyente->infonavit_contraseña }}
                        </div>
                        <br>
                        <div class="form-group"><strong style="color: green">CITAS JAL</strong></div>
                        <div class="form-group">
                            <strong>Usuario citas:</strong>
                            {{ $contribuyente->citas_jal_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña citas:</strong>
                            {{ $contribuyente->citas_jal_contraseña }}
                        </div>
                        <br>
                        <div class="form-group"><strong style="color: green">SAS</strong></div>
                        <div class="form-group">
                            <strong>Usuario sas:</strong>
                            {{ $contribuyente->sas_usuario}}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña sas:</strong>
                            {{ $contribuyente->sas_contraseña }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Extra:</strong>
                            {{ $contribuyente->extra }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
