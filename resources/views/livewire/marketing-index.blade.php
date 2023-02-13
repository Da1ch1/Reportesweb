<div class="card">
    <div class="card-header">
        <div style="display: flex; justify-content: space-between; align-items: center;">

            <span id="card_title">
                {{ __('Marketing') }}
            </span>
            <div class="col-sm-1" >
                <input  type="text" name="busqueda" id="" placeholder="Buscar..." class="form-control border-dark-subtle" wire:model="busqueda">   
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
                <a href="{{ route('marketings.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                        
                        <th>Fecha</th>
                        <th>Actividad</th>
                        <th>Red Social</th>
                        <th>Ejecutivo</th>
                        <th>Estatus</th>
                        <th>Comentarios</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($marketings as $marketing)
                        <tr>
                            <td>{{ ++$i }}</td>
                            
                            <td>{{ $marketing->fecha }}</td>
                            <td>{{ $marketing->actividad }}</td>
                            <td>{{ $marketing->red_social() }}</td>
                            <td>{{ $marketing->mkejecutivo->nombre }}</td>
                            <td>{{ $marketing->estatus() }}</td>
                            <td>{{ $marketing->comentarios }}</td>

                            <td>
                                <form action="{{ route('marketings.destroy',$marketing->id) }}" method="POST">
                                    <a class="btn btn-sm btn-primary " href="{{ route('marketings.show',$marketing->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                    <a class="btn btn-sm btn-success" href="{{ route('marketings.edit',$marketing->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
        {!! $marketings->links() !!}
    </div>
</div>