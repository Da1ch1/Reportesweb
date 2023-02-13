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
            <div class="float-center col-mm-1 ">
                <select  name="" id="" class="form-select  border-dark-subtle"  wire:model="paginacion">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    
                </select>
            </div>
             <div class="float-right">
                <a href="{{ route('contribuyentes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                  {{ __('+ Crear') }}
                </a>
              </div>
        </div>
    </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-primary">
            <p>{{ $message }}</p>
        </div>
        @endif
    <div class="card-body">
        <div class="table-responsive">
        <table id="example" class="table table-striped table-hover" >
            <thead>
                <tr>
                    <th>N°</th>
                    <th></th>    
                    <th>RFC</th>
                    <th>Nombre</th>
                    <th>Regimen fiscal</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Factura Contraseña</th>
                    <th>Nom Contraseña</th>
                    <th>Vencimiento CSD</th>
                    
                    <!--SAT-->          
                    <th style="background-color: rgb(28, 151, 252); color:aliceblue">CIEC contraseña (SAT)</th>
                    <th style="background-color: rgb(28, 151, 252); color:aliceblue">Fiel contraseña (SAT)</th>
                    <th style="background-color: rgb(28, 151, 252); color:aliceblue">Vencimiento fiel (SAT)</th>

                     <!--IMSS-->
                     <th>Usuario (IMSS)</th>
                     <th>Contraseña (IMSS)</th>

                     <!--IDSE-->    
                     <th style="background-color: rgb(28, 151, 252); color:aliceblue">Usuario (IDSE)</th>
                     <th style="background-color: rgb(28, 151, 252); color:aliceblue">Contraseña (IDSE)</th>

                      <!--SIPARE-->
                      <th>Usuario (SIPARE)</th>
                      <th>Contraseña (SIPARE)</th>

                       <!--2% NOM-->  
                       <th style="background-color: rgb(28, 151, 252); color:aliceblue">Usuario (2% NOM)</th>
                       <th style="background-color: rgb(28, 151, 252); color:aliceblue">Contraseña (2% NOM)</th> 
                      
                       <!--Infonavit-->
                       <th>Usuario (INFONAVIT)</th>
                       <th>Contraseña (INFONAVIT)</th>

                       <!--CITAS JAL-->
                       <th style="background-color: rgb(28, 151, 252); color:aliceblue">Usuario (CITAS JAL)</th>
                       <th style="background-color: rgb(28, 151, 252); color:aliceblue">Contraseña (CITAS JAL)</th>

                       <!--SAS-->
                       <th>Usuario (SAS)</th>
                       <th>Contraseña (SAS)</th>

                        <!---->
                        <th>Extra</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contribuyentes as $contribuyente)
                <tr>
                    <td>{{ ++$i }}</td>
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
                             <td>{{ $contribuyente->ciec_contraseña}}</td>
                             <td>{{ $contribuyente->fiel_contraseña}}</td>
                             <td>{{ $contribuyente->vencimiento_fiel}}</td>
                            <!--IMSS-->
                            <td>{{ $contribuyente->ev_imss_usuario}}</td>
                            <td>{{ $contribuyente->ev_imss_contraseña}}</td>
                             <!--IDSE-->
                             <td>{{ $contribuyente->idse_usuario}}</td>
                             <td>{{ $contribuyente->idse_contraseña}}</td>
                              <!--SIPARE-->
                            <td>{{ $contribuyente->sipare_usuario}}</td>
                            <td>{{ $contribuyente->sipare_contraseña}}</td>
                             <!--NOM-->
                             <td>{{ $contribuyente->usuario_2}}</td>
                             <td>{{ $contribuyente->contraseña_2}}</td>
                              <!--Infonavit-->
                            <td>{{ $contribuyente->infonavit_usuario}}</td>
                            <td>{{ $contribuyente->infonavit_contraseña}}</td>
                            <!--CITAS JAL-->
                            <td>{{ $contribuyente->citas_jal_usuario}}</td>
                            <td>{{ $contribuyente->citas_jal_contraseña}}</td>
                             <!--SAS-->
                             <td>{{ $contribuyente->sas_usuario}}</td>
                             <td>{{ $contribuyente->sas_contraseña}}</td>
                             <!--Extra-->
                             <td>{{ $contribuyente->extra}}</td>
                            <td>
                                <form action="{{ route('contribuyentes.destroy',$contribuyente->id) }}" method="POST">
                                    <a class="btn btn-sm btn-primary " href="{{ route('contribuyentes.show',$contribuyente->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                    <a class="btn btn-sm btn-success" href="{{ route('contribuyentes.edit',$contribuyente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                </form>
                            </td>
                </tr>
                @endforeach
            </tbody>
        </table>  
    </div> 
    <br>
    {!! $contribuyentes->links() !!}
    </div>
 </div>

 