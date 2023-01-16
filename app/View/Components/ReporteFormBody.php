<?php

namespace App\View\Components;
use App\Models\Reporte;
use Illuminate\View\Component;

class ReporteFormBody extends Component
{
    private $reporte;
    /**
     * Create a new component instance.
     *
     * @param \App\Models\Reporte $reporte
     * @return void
     */
    public function __construct($reporte = null)
    {
        
        $this->reporte = $reporte;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'reporte' => $this->reporte,
            'Ejecutivo' => Reporte::EJECUTIVO,
        ];
        return view('components.reporte-form-body', $params);
    }
}
