<div class="card">
    <div class="card-header" style="background-color: rgba(0, 0, 0, 0.11)">
        <div style="display: flex; justify-content: space-between; align-items: center;">

            <span id="card_title" style="color:rgb(0, 0, 0)">
                {{ __('Prospectos') }}
            </span>
            <div class="float-center col-sm-1 " >
                <input  type="text" name="" id="" placeholder="Buscar..." class="form-control border-dark-subtle" wire:model="busqueda">
            </div>
            <div class="float-center col-mm-1 ">
                <select  name="" id="" class="form-select  border-dark-subtle"  wire:model="paginacion">
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                </select>
            </div>
             <div class="float-right">
                <a href="{{ route('prospectos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
            <table class="table table-striped table-hover" id="example">
                <thead class="thead">
                    <tr>
                        <th>N°</th>
                        
                        <th>Nombre</th>
                        <th>Contacto</th>
                        <th>Servicio</th>
                        <th>Medio de Contacto</th>
                        <th>Seguimientos</th>
                        <th>Agente</th>
                        <th>Fecha</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prospectos as $prospecto)
                        <tr>
                            <td>{{ ++$i }}</td>
                            
                            <td>{{ $prospecto->Nombre }}</td>
                            <td>{{ $prospecto->Contacto }}</td>
                            <td>{{ $prospecto->Servicio }}</td>
                            <td>{{ $prospecto->Medio_contacto }}</td>
                            <td>{{ $prospecto->seguimiento->seguimiento }}</td>
                            <td>{{ $prospecto->agente->nombre }}</td>
                            <td>{{ $prospecto->Fecha }}</td>

                            <td>
                                <form action="{{ route('prospectos.destroy',$prospecto->id) }}" method="POST">
                                    <a class="btn btn-sm btn-success " href="{{ route('prospectos.show',$prospecto->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                    <a class="btn btn-sm btn-primary" href="{{ route('prospectos.edit',$prospecto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {!! $prospectos->links() !!}
    </div>
</div>
