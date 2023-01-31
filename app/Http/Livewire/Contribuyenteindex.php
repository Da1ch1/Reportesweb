<?php

namespace App\Http\Livewire;

use App\Models\Contribuyente;
use Livewire\Component;
use Livewire\WithPagination;

class ContribuyenteIndex extends Component
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
        $contribuyentes = $this->consulta();
        $contribuyentes = $contribuyentes->paginate($this->paginacion);
        if( $contribuyentes->currentPage() > $contribuyentes->lastPage())
        {
            $this->resetPage();
            $contribuyentes = $this->consulta();
            
            $contribuyentes = $contribuyentes->paginate($this->paginacion);
        }
        $params = [
            'contribuyentes' => $contribuyentes,
        ];
        return view('livewire.contribuyente-index',$params);
        
    }
    private function consulta()
    {
        $query = Contribuyente::orderBy('id','ASC');
        if( $this->busqueda != '')
        {
            $query->where('rfc','LIKE', '%'.$this->busqueda.'%');
                        
        }
        return $query;
    }
}
