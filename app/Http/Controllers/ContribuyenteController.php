<?php

namespace App\Http\Controllers;

use App\Models\Avance;
use App\Models\Contribuyente;
use Illuminate\Http\Request;


/**
 * Class ContribuyenteController
 * @package App\Http\Controllers
 */
class ContribuyenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contribuyentes = Contribuyente::paginate();

        return view('contribuyente.index', compact('contribuyentes'))
            ->with('i', (request()->input('page', 1) - 1) * $contribuyentes->perPage());
    }

    public function vista()
    {
        $avances = Avance::paginate();
        return view('contribuyente.vista', compact('avances'))
        ->with('i', (request()->input('page', 1) - 1) * $avances->perPage());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contribuyente = new Contribuyente();
        return view('contribuyente.create', compact('contribuyente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Contribuyente::$rules);

        $contribuyente = Contribuyente::create($request->all());

        return redirect()->route('contribuyentes.index')
            ->with('success', 'Contribuyente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contribuyente = Contribuyente::find($id);

        return view('contribuyente.show', compact('contribuyente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contribuyente = Contribuyente::find($id);

        return view('contribuyente.edit', compact('contribuyente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Contribuyente $contribuyente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contribuyente $contribuyente)
    {
        request()->validate(Contribuyente::$rules);

        $contribuyente->update($request->all());

        return redirect()->route('contribuyentes.index')
            ->with('success', 'Contribuyente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contribuyente = Contribuyente::find($id)->delete();

        return redirect()->route('contribuyentes.index')
            ->with('success', 'Contribuyente deleted successfully');
    }
}
