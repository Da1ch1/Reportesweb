<?php

namespace App\Http\Controllers;
use App\Http\Requests\ReporteRequest;
use App\Models\Reporte;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use PDF;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menus.visualizacion');
    }
    public function pdf()
    {  $reportes = Reporte::paginate(10);
        $pdf=PDF::loadView('home',['reportes'=>$reportes]);
        //$pdf->loadHTML('reportes');
        return $pdf->stream();
        //return view('home', compact('reportes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menus.creacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReporteRequest $request)
    {
        $datos = $request->validated();
        $reporte = Reporte::create($datos);
        return redirect()->route('menus.visualizacion', 'home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show(Reporte $reporte)
    {
        return view('menus.show', ['reporte' => $reporte]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporte $reporte)
    {
        return view('menus.edicion', compact('reporte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(ReporteRequest $request, Reporte $reporte)
    {
            $datos = $request->validated();
            $reporte->update( $datos);
            return redirect()->route('menus.visualizacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {
        //
    }
}
