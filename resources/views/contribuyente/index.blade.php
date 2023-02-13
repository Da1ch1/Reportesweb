@extends('layouts.contribuyente')

@section('title','Contribuyente')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!--El contenido se encuentra en la carpeta resources/livewire/contribuyente-index y  la linea de abajo hace llamado a esa vista-->
                @livewire('contribuyente-index')

                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
                
                <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

                <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>


                <!-- Para estilos de Ecxel-->
                <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.templates.min.js"></script>
            </div>
        </div>
    </div>
@endsection
