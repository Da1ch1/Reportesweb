<?php

namespace App\Http\Controllers;

use App\Models\Agente;
use Illuminate\Http\Request;

/**
 * Class AgenteController
 * @package App\Http\Controllers
 */
class AgenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agentes = Agente::paginate();

        return view('agente.index', compact('agentes'))
            ->with('i', (request()->input('page', 1) - 1) * $agentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agente = new Agente();
        return view('agente.create', compact('agente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Agente::$rules);

        $agente = Agente::create($request->all());

        return redirect()->route('agentes.index')
            ->with('success', 'Agente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agente = Agente::find($id);

        return view('agente.show', compact('agente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agente = Agente::find($id);

        return view('agente.edit', compact('agente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Agente $agente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agente $agente)
    {
        request()->validate(Agente::$rules);

        $agente->update($request->all());

        return redirect()->route('agentes.index')
            ->with('success', 'Agente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $agente = Agente::find($id)->delete();

        return redirect()->route('agentes.index')
            ->with('success', 'Agente deleted successfully');
    }
}
