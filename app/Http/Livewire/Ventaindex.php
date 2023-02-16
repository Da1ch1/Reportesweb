<?php

namespace App\Http\Livewire;
use App\Models\Cliente;
use App\Models\Actividade;
use App\Models\Costo;
use App\Models\Contacto;
use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class VentaIndex extends Component
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
        return view('livewire.venta-index',$params)
        ->with('i', (request()->input('page', 1)-1)*$ventas->perPage());
        
    }
    private function consulta()
    {
        $query = Venta::orderBy('id','DESC');
        if( $this->busqueda != '')
        {
            $query->where('Atendio','LIKE', '%'.$this->busqueda.'%')
                        ->orWhere('Fecha','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Procesoactividad','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Soporte','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Nfactura','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Poliza','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Horario','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Sistemas','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Contabilidad','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Programacion','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Diseño','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('MKT','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Nom','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Equipos','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Antivirus','LIKE','%'.$this->busqueda. '%')
                        ->orWhere('Cursos','LIKE','%'.$this->busqueda. '%')
                        ->orWhereHas('cliente',function($q){
                            $q->where('nombre', 'LIKE', '%'.$this->busqueda.'%');
                        })
                        ->orWhereHas('contacto',function($q){
                            $q->where('nombre', 'LIKE', '%'.$this->busqueda.'%');
                        })
                        ->orWhereHas('costo',function($q){
                            $q->where('costos', 'LIKE', '%'.$this->busqueda.'%');
                        })
                        ->orWhereHas('actividade',function($q){
                            $q->where('actividad', 'LIKE', '%'.$this->busqueda.'%');
                        });
        }
        return $query;
    }
}
