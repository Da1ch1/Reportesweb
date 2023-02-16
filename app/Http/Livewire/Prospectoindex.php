<?php

namespace App\Http\Livewire;

use App\Models\Prospecto;
use App\Models\Seguimiento;
use App\Models\Agente;
use Livewire\Component;
use Livewire\WithPagination;

class ProspectoIndex extends Component
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
        
        $prospectos = $this->consulta();
        $prospectos = $prospectos->paginate($this->paginacion);
        if( $prospectos->currentPage() > $prospectos->lastPage())
        {
            $this->resetPage();
            $prospectos = $this->consulta();
            
            $prospectos = $prospectos->paginate($this->paginacion);
        }
        $params = [
            'prospectos' => $prospectos,
        ];
        return view('livewire.prospecto-index', $params)
        ->with('i', (request()->input('page', 1)-1)*$prospectos->perPage());
        
    }
    private function consulta()
    {
        $query = Prospecto::OrderBy('id','DESC');
        if( $this->busqueda != '')
        {
            $query->where('Nombre','LIKE', '%'.$this->busqueda.'%')
                        ->orWhere('Contacto','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Servicio','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Medio_contacto','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Fecha','LIKE','%'.$this->busqueda. '%')
                        ->orWhereHas('Agente',function($q){
                            $q->where('nombre', 'LIKE', '%'.$this->busqueda.'%');
                        })
                        ->orWhereHas('Seguimiento',function($q){
                            $q->where('seguimiento', 'LIKE', '%'.$this->busqueda.'%');
                        });
        }
        return $query;
    }
}
