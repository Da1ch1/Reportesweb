<?php

namespace App\Http\Controllers;

use App\Models\Contribuyente;
use App\Models\Avance;
use Illuminate\Http\Request;

/**
 * Class AvanceController
 * @package App\Http\Controllers
 */
class AvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avances = Avance::paginate(20);

        return view('avance.index', compact('avances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $avance = new Avance();
        $contribuyentes=Contribuyente::pluck('rfc','id');
        return view('avance.create', compact('avance','contribuyentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Avance::$rules);

        $avance = Avance::create($request->all());

        return redirect()->route('avances.index')
            ->with('success', 'Avance created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $avance = Avance::find($id);

        return view('avance.show', compact('avance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $avance = Avance::find($id);
        $contribuyentes=Contribuyente::pluck('rfc','id');
        return view('avance.edit', compact('avance', 'contribuyentes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Avance $avance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avance $avance)
    {
        request()->validate(Avance::$rules);

        $avance->update($request->all());

        return redirect()->route('avances.index')
            ->with('success', 'Avance updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $avance = Avance::find($id)->delete();

        return redirect()->route('avances.index')
            ->with('success', 'Avance deleted successfully');
    }
}
