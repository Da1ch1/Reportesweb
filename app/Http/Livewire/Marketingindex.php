<?php

namespace App\Http\Livewire;

use App\Models\Marketing;
use Livewire\Component;
use Livewire\WithPagination;

class MarketingIndex extends Component
{
    use WithPagination;
    public $busqueda = '';
    public $paginacion = '20';
    protected $paginationTheme = 'bootstrap';
    protected $queryString =
    
        [
            'busqueda' => ['except' => ''],
            'paginacion' => ['except' => '20'],
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
        return view('livewire.marketing-index',$params)
        ->with('i', (request()->input('page', 1)-1)*$marketings->perPage());
        
    }
    private function consulta()
    {
        $query = Marketing::orderBy('id','DESC');
        if( $this->busqueda != '')
        {
            $query->where('fecha','LIKE', '%'.$this->busqueda.'%');
                        
        }
        return $query;
    }
}
