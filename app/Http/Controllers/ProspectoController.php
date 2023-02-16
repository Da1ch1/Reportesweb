<?php

namespace App\Http\Controllers;

use App\Models\Prospecto;
use App\Models\Seguimiento;
use App\Models\Agente;
use Illuminate\Http\Request;
use Livewire\WithPagination;
/**
 * Class ProspectoController
 * @package App\Http\Controllers
 */
class ProspectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prospectos = Prospecto::paginate();

        return view('prospecto.index', compact('prospectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prospecto = new Prospecto();
        $seguimientos=Seguimiento::pluck('seguimiento','id');
        $agentes=Agente::pluck('nombre','id');
        return view('prospecto.create', compact('prospecto','agentes','seguimientos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Prospecto::$rules);

        $prospecto = Prospecto::create($request->all());

        return redirect()->route('prospectos.index')
            ->with('success', 'Prospecto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prospecto = Prospecto::find($id);

        return view('prospecto.show', compact('prospecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prospecto = Prospecto::find($id);
        $seguimientos=Seguimiento::pluck('seguimiento','id');
        $agentes=Agente::pluck('nombre','id');
        return view('prospecto.edit', compact('prospecto','agentes','seguimientos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prospecto $prospecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prospecto $prospecto)
    {
        request()->validate(Prospecto::$rules);

        $prospecto->update($request->all());

        return redirect()->route('prospectos.index')
            ->with('success', 'Prospecto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prospecto = Prospecto::find($id)->delete();

        return redirect()->route('prospectos.index')
            ->with('success', 'Prospecto deleted successfully');
    }
}
