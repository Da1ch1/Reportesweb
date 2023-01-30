<?php

namespace App\Http\Livewire;
use App\Models\Cliente;
use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class VentaIndex extends Component
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
        $ventas = $this->consulta();
        $ventas = $ventas->paginate($this->paginacion);
        if( $ventas->currentPage() > $ventas->lastPage())
        {
            $this->resetPage();
            $ventas = $this->consulta();
            
            $ventas = $ventas->paginate($this->paginacion);
        }
        $params = [
            'ventas' => $ventas,
        ];
        return view('livewire.venta-index',$params);
        
    }
    private function consulta()
    {
        $query = Venta::orderBy('id','ASC');
        if( $this->busqueda != '')
        {
            $query->where('Atendio','LIKE', '%'.$this->busqueda.'%')
                        ->orWhere('Fecha','LIKE','%'.$this->busqueda. '%')
                        ->orWhereHas('cliente',function($q){
                            $q->where('nombre', 'LIKE', '%'.$this->busqueda.'%');
                        });
        }
        return $query;
    }
}
