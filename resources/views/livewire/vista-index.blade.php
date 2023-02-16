<div class="card">
    <div class="card-header" style="background-color: rgba(0, 0, 0, 0.11)">
        <div style="display: flex; justify-content: space-between; align-items: center;">

            <span id="card_title" style="color:rgb(0, 0, 0)">
                {{ __('Vista General') }}
            </span>
            <div class="col-sm-2" >
                <input style="margin-left: -15px" type="text" name="busqueda" id="" placeholder="Buscar..." class="form-control border-dark-subtle" wire:model="busqueda">   
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
            <table id="vista" class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        <th>N°</th>

                        <th>Rfc</th>
                        <th>Nombre</th>
                        <th>Regimen fiscal</th>
                        <th>Mes</th>
                        <th>Estatus</th>
                        <th>Fecha</th>
                        <th>Pendientes</th>
                        <th></th>
                    </tr>
                </thead>
                
                </tbody>
                @foreach ($avances as $avance)
                        <tr>
                            <td>{{ ++$i }}</td>
                            
                            <td>{{ $avance->contribuyente->rfc }}</td>
                            <td>{{ $avance->contribuyente->nombre }}</td>
                            <td>{{ $avance->contribuyente->regimen->regimenfiscal }}</td>
                            <td>{{ $avance->mes() }}</td>
                            <td>{{ $avance->estatus() }}</td>
                            <td>{{ $avance->fecha }}</td>
                            <td>{{ $avance->pendientes }}</td>
                            <td>
                            <form action="{{ route('avances.destroy',$avance->id) }}" method="POST">
                                
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
