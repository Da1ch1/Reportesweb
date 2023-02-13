<?php

namespace App\Http\Livewire;

use App\Models\Avance;
use App\Models\Contribuyente;
use Livewire\Component;
use Livewire\WithPagination;

class VistaIndex extends Component
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
        $avances = $this->consulta();
        $avances = $avances->paginate($this->paginacion);
        if( $avances->currentPage() > $avances->lastPage())
        {
            $this->resetPage();
            $avances = $this->consulta();
            
            $avances = $avances->paginate($this->paginacion);
        }
        $params = [
            'avances' => $avances,
        ];
        return view('livewire.vista-index',$params)
        ->with('i', (request()->input('page', 1)-1)*$avances->perPage());
        
    }
    private function consulta()
    {
        $query = Avance::orderBy('id','DESC');
        if( $this->busqueda != '')
        {
            $query->where('ESTATUS','LIKE', '%'.$this->busqueda.'%')
                ->orWhere('fecha','LIKE','%'.$this->busqueda. '%')
                ->orWhere('pendientes','LIKE','%'.$this->busqueda. '%')
                ->orWhereHas('Contribuyente',function($q){
                    $q->where('nombre', 'LIKE', '%'.$this->busqueda.'%');
                });
                        
        }
        return $query;
    }
}
