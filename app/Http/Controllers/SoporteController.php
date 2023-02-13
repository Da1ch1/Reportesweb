<?php

namespace App\Http\Controllers;

use App\Models\Spejecutivo;
use App\Models\Stat;
use App\Models\Soporte;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use PDF;

/**
 * Class SoporteController
 * @package App\Http\Controllers
 */
class SoporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soportes = Soporte::paginate(20);

        return view('soporte.index', compact('soportes'));
    }

    public function pdf()
    {  $soportes = Soporte::paginate(10);
        $pdf=PDF::loadView('home',['soportes'=>$soportes]);
        return $pdf->stream();
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $soporte = new Soporte();
        $spejecutivos=Spejecutivo::pluck('nombre','id');
        $stats=Stat::pluck('estatus','id');
        return view('soporte.create', compact('soporte','spejecutivos','stats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Soporte::$rules);

        $soporte = Soporte::create($request->all());

        return redirect()->route('soportes.index')
            ->with('success', 'Soporte created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $soporte = Soporte::find($id);

        return view('soporte.show', compact('soporte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $soporte = Soporte::find($id);
        $spejecutivos=Spejecutivo::pluck('nombre','id');
        $stats=Stat::pluck('estatus','id');
        return view('soporte.edit', compact('soporte','spejecutivos','stats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Soporte $soporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soporte $soporte)
    {
        request()->validate(Soporte::$rules);

        $soporte->update($request->all());

        return redirect()->route('soportes.index')
            ->with('success', 'Soporte updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $soporte = Soporte::find($id)->delete();

        return redirect()->route('soportes.index')
            ->with('success', 'Soporte deleted successfully');
    }
}
