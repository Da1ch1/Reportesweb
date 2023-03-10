<div class="card">
    <div class="card-header" style="background-color: rgba(0, 0, 0, 0.11)">
        <div style="display: flex; justify-content: space-between; align-items: center;">

            <span id="card_title" style="color:rgb(0, 0, 0)">
                {{ __('Avance') }}
                <a href="{{ url('/vista') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                    {{ __('Vista') }}
                  </a>
            </span>
            <div class="col-sm-2" >
                <input style="margin-left: 15px" type="text" name="busqueda" id="" placeholder="Buscar..." class="form-control border-dark-subtle" wire:model="busqueda">   
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
                <a href="{{ route('avances.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
            <table id="example" class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        <th>N°</th>
                        
                        
                        <th>Nombre</th>
                        
                        <th>Mes</th>
                        <th>Estatus</th>
                        <th>Fecha</th>
                        <th>Pendientes</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($avances as $avance)
                        <tr>
                            <td>{{ ++$i }}</td>
                            
                            
                            <td>{{ $avance->contribuyente->nombre }}</td>
                            
                            <td>{{ $avance->mes() }}</td>
                            <td>{{ $avance->estatus() }}</td>
                            <td>{{ $avance->fecha }}</td>
                            <td>{{ $avance->pendientes }}</td>

                            <td>
                                <form action="{{ route('avances.destroy',$avance->id) }}" method="POST">
                                    <a class="btn btn-sm btn-primary " href="{{ route('avances.show',$avance->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                    <a class="btn btn-sm btn-success" href="{{ route('avances.edit',$avance->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
        {!! $avances->links() !!}
    </div>
</div>

