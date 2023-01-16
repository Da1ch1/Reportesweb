<?php

namespace App\View\Components;
use Carbon\Carbon;
use App\Models\Reporte;
use Illuminate\View\Component;

class ReporteFormBody extends Component
{
    private $reporte;
    /**
     * Create a new component instance.
     *
     * @param App\Models\Reporte $reporte
     * @return void
     */
    public function __construct($reporte = null)
    {
        if (is_null($reporte))
        {
            $reporte = Reporte::make([
               'Ejecutivo' =>0,
                'Estatus'  =>0,
                'Fecha_inicio' => Carbon::now(),
            ]);
        }
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
        ];
        return view('components.reporte-form-body', $params);
    }
}
