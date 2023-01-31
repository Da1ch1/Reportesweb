<?php

namespace App\Http\Livewire;

use App\Models\Avance;
use Livewire\Component;
use Livewire\WithPagination;

class AvanceIndex extends Component
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
        return view('livewire.avance-index',$params);
        
    }
    private function consulta()
    {
        $query = Avance::orderBy('id','ASC');
        if( $this->busqueda != '')
        {
            $query->where('ESTATUS','LIKE', '%'.$this->busqueda.'%');
                        
        }
        return $query;
    }
}
