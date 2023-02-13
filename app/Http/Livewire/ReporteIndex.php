<?php

namespace App\Http\Livewire;

use App\Models\Soporte;
use App\Models\Stat;
use App\Models\Spejecutivo;
use Livewire\Component;
use Livewire\WithPagination;

class ReporteIndex extends Component
{
    use WithPagination;
    public $busqueda = '';
    public $paginacion = 20;
    protected $paginationTheme = 'bootstrap';
    protected $queryString =
    
        [
            'busqueda' => ['except' => ''],
            'paginacion' => ['except' => 20],
        ];  
    public function render()
    {
        
        $soportes = $this->consulta();
        $soportes = $soportes->paginate($this->paginacion);
        if( $soportes->currentPage() > $soportes->lastPage())
        {
            $this->resetPage();
            $soportes = $this->consulta();
            
            $soportes = $soportes->paginate($this->paginacion);
        }
        $params = [
            'soportes' => $soportes,
        ];
        return view('livewire.reporte-index', $params)
        ->with('i', (request()->input('page', 1)-1)*$soportes->perPage());
        
    }
    private function consulta()
    {
        $query = Soporte::OrderBy('id','DESC');
        if( $this->busqueda != '')
        {
            $query->where('Fecha_inicio','LIKE', '%'.$this->busqueda.'%')
                        ->orWhere('Fecha_fin','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Cliente','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('PostVenta','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Evidencia','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Comentarios','LIKE','%'.$this->busqueda. '%')
                        ->orWhereHas('Spejecutivo',function($q){
                            $q->where('nombre', 'LIKE', '%'.$this->busqueda.'%');
                        })
                        ->orWhereHas('Stat',function($q){
                            $q->where('estatus', 'LIKE', '%'.$this->busqueda.'%');
                        });
        }
        return $query;
    }
}
