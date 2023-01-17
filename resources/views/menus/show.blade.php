@extends('layouts.app')

@section('title', "Reporte")

@section('editar')
<br>
  <div class="card">
        <div >
            <br>
                <h3>
                     " <i>{{$reporte->Cliente}}</i> <i>{{$reporte->Asunto}}</i> "
                </h3>
            <br>
        </div>
        <ul>
            <li>
                Fecha_inicio: <strong>{{$reporte->Fecha_inicio->format('d/m/y')}}</strong>
            </li>
            <li>
                Fecha_fin: <strong>{{$reporte->Fecha_fin->format('d/m/y')}}</strong>
            </li>
           
            
            <p>
              - Evidencia: {{$reporte->Evidencia}}
            </p>
        </ul>
  </div>  
@endsection

