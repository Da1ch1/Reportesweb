<?php

namespace App\Http\Livewire;

use App\Models\Marketing;
use Livewire\Component;
use Livewire\WithPagination;

class MarketingIndex extends Component
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
        $marketings = $this->consulta();
        $marketings = $marketings->paginate($this->paginacion);
        if( $marketings->currentPage() > $marketings->lastPage())
        {
            $this->resetPage();
            $marketings = $this->consulta();
            
            $marketings = $marketings->paginate($this->paginacion);
        }
        $params = [
            'marketings' => $marketings,
        ];
        return view('livewire.marketing-index',$params);
        
    }
    private function consulta()
    {
        $query = Marketing::orderBy('id','ASC');
        if( $this->busqueda != '')
        {
            $query->where('fecha','LIKE', '%'.$this->busqueda.'%');
                        
        }
        return $query;
    }
}
