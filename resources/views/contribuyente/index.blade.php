@extends('layouts.contribuyente')

@section('title','Contribuyente')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contribuyente') }}
                                <a href="{{ url('/vista') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                                    {{ __('Vista') }}
                                  </a>
                            </span>

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
                                        <th>No</th>
                                        
										<th>Rfc</th>
										<th>Nombre</th>
										<th>Regimen fiscal</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contribuyentes as $contribuyente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contribuyente->rfc }}</td>
											<td>{{ $contribuyente->nombre }}</td>
											<td>{{ $contribuyente->regimenf }}</td>

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
                    </div>
                </div>
                {!! $contribuyentes->links() !!}
            </div>
        </div>
    </div>
@endsection
