<div class="card">
    <div class="card-header">
        <div style="display: flex; justify-content: space-between; align-items: center;">

            <span id="card_title">
                {{ __('Contribuyente') }}
                <a href="{{ url('/vista') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                    {{ __('Vista') }}
                  </a>
            </span>
            <div class="col-sm-2" >
                <input style="margin-left: 15px" type="text" name="busqueda" id="" placeholder="Buscar..." class="form-control border-dark-subtle" wire:model="busqueda">   
            </div>
             <div class="float-right">
                <a href="{{ route('contribuyentes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                  {{ __('+ Crear') }}
                </a>
              </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        
                        <th></th>
                        <th class="header">
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        </th>
                        <!--SAT-->
                        <th class="header testo"> 
                        <th style="background-color: #209de6"></th>
                        <th style="text-align:center; color: #ffffff ; background-color:#209de6">SAT</th>
                        <th style="background-color: #209de6"></th>
                        </th>
                        <!--IMSS-->
                        <th class="header">
                            <th></th>   
                            <th style="text-align:start">IMSS</th>
                            <th></th>
                            <th></th>
                        </th>
                        <!--IDSE-->
                        <th class="header">
                        <th style="background-color: #209de6"></th>
                        <th style="text-align:start;color: #ffffff ; background-color:#209de6">IDSE</th>
                        <th style="background-color: #209de6"></th>
                        </th>
                        <!--SIPARE-->
                        <th class="header">
                            <th></th>   
                            <th style="text-align:start">SAPIRE</th>
                            <th></th>
                            <th></th>
                        </th>
                        <!--2% NOM-->
                        <th class="header">
                        <th style="text-align:end; color:#ffffff; background-color: #209de6">2%</th> 
                        <th style="background-color: #209de6"></th>   
                        <th style="text-align: start; color: #ffffff ; background-color:#209de6">NOM</th>
                        <th style="background-color: #209de6"></th>
                        </th>
                        <!--Infonavit-->
                        <th class="header">
                        <th></th>   
                        <th style="text-align:start">Infonavit</th>
                        <th></th>
                        <th></th>
                        </th>
                        <!--CITAS JAL-->
                        <th class="header">
                        <th style="background-color: #209de6"></th> 
                        <th style="text-align:left; color: #ffffff ; background-color:#209de6">CITAS JAL</th>
                        <th style="background-color: #209de6"></th>
                        <th style="background-color: #209de6"></th>
                        
                        </th>
                        <!--SAS-->
                        <th class="header">
                            <th></th>   
                            <th style="text-align:start">SAS</th>
                            <th></th>
                            <th></th>
                        </th>
                        <!---->
                        <th></th>
                        <td></td>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>N°</th>
                        <th class="header">
                        <th>RFC</th>
                        <th>Nombre</th>
                        <th>Regimen fiscal</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Factura Contraseña</th>
                        <th>Nom Contraseña</th>
                        <th>Vencimiento CSD</th>
                        </th>
                        <!--SAT-->
                        <th class="header border" > 
                        <th>CIEC contraseña</th>
                        <th>Fiel contraseña</th>
                        <th>Vencimiento fiel</th>
                        </th>
                        <!--IMSS-->
                        <th class="header border">
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th></th>
                        <th></th> 
                        </th>
                        <!--IDSE-->
                        <th class="header border">   
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th></th>
                        
                        </th>
                        <!--SIPARE-->
                        <th class="header border">
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th></th>
                        <th></th>
                        </th>
                        <!--2% NOM-->
                        <th class="header border">   
                        <th>Usuario</th>
                        <th></th>
                        <th>Contraseña</th> 
                        <th></th>
                        </th>
                        <!--Infonavit-->
                        <th class="header border">
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th></th>
                        <th></th>
                        </th>
                        <!--CITAS JAL-->
                        <th class="header border">
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th></th>
                        <th></th>
                        </th>
                        <!--SAS-->
                        <th class="header border">
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th></th>
                        <th></th>
                        </th>
                        <!---->
                        <td class="header border">
                        </td>
                        <td></td>
                        <th>Extra</th>
                        <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                        
                </thead>
                <tbody>
                    @foreach ($contribuyentes as $contribuyente)
                        <tr>
                            <td>{{ $contribuyente->id }}</td>
                            <td></td>
                            <td>{{ $contribuyente->rfc }}</td>
                            <td>{{ $contribuyente->nombre }}</td>
                            <td>{{ $contribuyente->regimen->regimenfiscal }}</td>
                            <td>{{ $contribuyente->email}}</td>
                            <td>{{ $contribuyente->telefono}}</td>
                            <td>{{ $contribuyente->factura_contraseña}}</td>
                            <td>{{ $contribuyente->nomina_contraseña}}</td>
                            <td>{{ $contribuyente->vencimiento_csd}}</td>
                            <!-- SAT-->
                            <td class="border">
                            <td>{{ $contribuyente->ciec_contraseña}}</td>
                            <td>{{ $contribuyente->fiel_contraseña}}</td>
                            <td>{{ $contribuyente->vencimiento_fiel}}</td>
                            </td>
                            <!--IMSS-->
                            <td class="border">
                            <td>{{ $contribuyente->ev_imss_usuario}}</td>
                            <td>{{ $contribuyente->ev_imss_contraseña}}</td>
                            <td></td>
                            <td></td>
                            </td>
                            <!--IDSE-->
                            <td class="border">    
                            <td>{{ $contribuyente->idse_usuario}}</td>
                            <td>{{ $contribuyente->idse_contraseña}}</td>
                            <td></td>
                            </td>
                            <!--SIPARE-->
                            <td class="border">
                            <td>{{ $contribuyente->sipare_usuario}}</td>
                            <td>{{ $contribuyente->sipare_contraseña}}</td>
                            <td></td>
                            <td></td>
                            </td>
                            <!--NOM-->
                            <td class="border">
                            <td>{{ $contribuyente->usuario_2}}</td>
                            <td></td>
                            <td>{{ $contribuyente->contraseña_2}}</td>
                            <td></td>
                            </td>
                            <!--Infonavit-->
                            <td class="border">
                            <td>{{ $contribuyente->infonavit_usuario}}</td>
                            <td>{{ $contribuyente->infonavit_contraseña}}</td>
                            <td></td>
                            <td></td>
                            </td>
                            <!--CITAS JAL-->
                            <td class="border">
                            <td>{{ $contribuyente->citas_jal_usuario}}</td>
                            <td>{{ $contribuyente->citas_jal_contraseña}}</td>
                            <td></td>
                            <td></td>
                            </td>
                            <!--SAS-->
                            <td class="border">
                            <td>{{ $contribuyente->sas_usuario}}</td>
                            <td>{{ $contribuyente->sas_contraseña}}</td>
                            <td></td>
                            <td></td>
                            </td>
                            <td class="border"></td>
                            <td></td>
                            <td>{{ $contribuyente->extra}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <form action="{{ route('contribuyentes.destroy',$contribuyente->id) }}" method="POST">
                                    <a class="btn btn-sm btn-primary " href="{{ route('contribuyentes.show',$contribuyente->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                    <a class="btn btn-sm btn-success" href="{{ route('contribuyentes.edit',$contribuyente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                </form>
                            </td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>