<?php

namespace App\Http\Controllers;

use App\Models\Spejecutivo;
use Illuminate\Http\Request;

/**
 * Class SpejecutivoController
 * @package App\Http\Controllers
 */
class SpejecutivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spejecutivos = Spejecutivo::paginate();

        return view('spejecutivo.index', compact('spejecutivos'))
            ->with('i', (request()->input('page', 1) - 1) * $spejecutivos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spejecutivo = new Spejecutivo();
        return view('spejecutivo.create', compact('spejecutivo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Spejecutivo::$rules);

        $spejecutivo = Spejecutivo::create($request->all());

        return redirect()->route('spejecutivos.index')
            ->with('success', 'Spejecutivo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spejecutivo = Spejecutivo::find($id);

        return view('spejecutivo.show', compact('spejecutivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spejecutivo = Spejecutivo::find($id);

        return view('spejecutivo.edit', compact('spejecutivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Spejecutivo $spejecutivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spejecutivo $spejecutivo)
    {
        request()->validate(Spejecutivo::$rules);

        $spejecutivo->update($request->all());

        return redirect()->route('spejecutivos.index')
            ->with('success', 'Spejecutivo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $spejecutivo = Spejecutivo::find($id)->delete();

        return redirect()->route('spejecutivos.index')
            ->with('success', 'Spejecutivo deleted successfully');
    }
}
