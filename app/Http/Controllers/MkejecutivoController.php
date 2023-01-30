<?php

namespace App\Http\Controllers;

use App\Models\Mkejecutivo;
use Illuminate\Http\Request;

/**
 * Class MkejecutivoController
 * @package App\Http\Controllers
 */
class MkejecutivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mkejecutivos = Mkejecutivo::paginate();

        return view('mkejecutivo.index', compact('mkejecutivos'))
            ->with('i', (request()->input('page', 1) - 1) * $mkejecutivos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mkejecutivo = new Mkejecutivo();
        return view('mkejecutivo.create', compact('mkejecutivo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mkejecutivo::$rules);

        $mkejecutivo = Mkejecutivo::create($request->all());

        return redirect()->route('mkejecutivos.index')
            ->with('success', 'Mkejecutivo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mkejecutivo = Mkejecutivo::find($id);

        return view('mkejecutivo.show', compact('mkejecutivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mkejecutivo = Mkejecutivo::find($id);

        return view('mkejecutivo.edit', compact('mkejecutivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mkejecutivo $mkejecutivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mkejecutivo $mkejecutivo)
    {
        request()->validate(Mkejecutivo::$rules);

        $mkejecutivo->update($request->all());

        return redirect()->route('mkejecutivos.index')
            ->with('success', 'Mkejecutivo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mkejecutivo = Mkejecutivo::find($id)->delete();

        return redirect()->route('mkejecutivos.index')
            ->with('success', 'Mkejecutivo deleted successfully');
    }
}
