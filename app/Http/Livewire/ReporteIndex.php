<?php

namespace App\Http\Livewire;

use App\Models\Reporte;
use Livewire\Component;
use Livewire\WithPagination;

class ReporteIndex extends Component
{
    use WithPagination;
    public $busqueda = '';
    public $paginacion = 10;
    protected $paginationTheme = 'bootstrap';
    protected $queryString =
    
        [
            'busqueda' => ['except' => ''],
            'paginacion' => ['except' => 10],
        ];  
    public function render()
    {
        
        $reportes = $this->consulta();
        $reportes = $reportes->paginate($this->paginacion);
        if( $reportes->currentPage() > $reportes->lastPage())
        {
            $this->resetPage();
            $reportes = $this->consulta();
            
            $reportes = $reportes->paginate($this->paginacion);
        }
        $params = [
            'reportes' => $reportes,
        ];
        return view('livewire.reporte-index', $params);
        
    }
    private function consulta()
    {
        $query = Reporte::orderByDesc('id');
        if( $this->busqueda != '')
        {
            $query->where('Ejecutivo','LIKE', '%'.$this->busqueda.'%')
                        ->orWhere('Fecha_inicio','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Cliente','LIKE','%'.$this->busqueda. '%');
        }
        return $query;
    }
}
