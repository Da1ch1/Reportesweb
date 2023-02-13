<?php

namespace App\Http\Livewire;

use App\Models\Contribuyente;
use Livewire\Component;
use Livewire\WithPagination;

class ContribuyenteIndex extends Component
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
        return view('livewire.contribuyente-index',$params)
        ->with('i', (request()->input('page', 1)-1)*$contribuyentes->perPage());
        
    }
    private function consulta()
    {
        $query = Contribuyente::orderBy('id','DESC');
        if( $this->busqueda != '')
        {
            $query->where('rfc','LIKE', '%'.$this->busqueda.'%');
                        
        }
        return $query;
    }
}
