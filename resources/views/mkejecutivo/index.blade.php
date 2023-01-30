@extends('layouts.marketing')

@section('title','Ejecutivos')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ejecutivo') }}
                                <a href="{{ route('marketings.index') }}" class="btn btn-dark btn-sm float-right"  data-placement="left" style="margin-left: 17px">
                                    {{ __('Reporte') }}
                                  </a>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('mkejecutivos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>N°</th>
                                        
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mkejecutivos as $mkejecutivo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $mkejecutivo->nombre }}</td>

                                            <td>
                                                <form action="{{ route('mkejecutivos.destroy',$mkejecutivo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mkejecutivos.show',$mkejecutivo->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mkejecutivos.edit',$mkejecutivo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $mkejecutivos->links() !!}
            </div>
        </div>
    </div>
@endsection
