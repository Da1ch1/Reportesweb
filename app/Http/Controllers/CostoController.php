<?php

namespace App\Http\Controllers;

use App\Models\Costo;
use Illuminate\Http\Request;

/**
 * Class CostoController
 * @package App\Http\Controllers
 */
class CostoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costos = Costo::paginate();

        return view('costo.index', compact('costos'))
            ->with('i', (request()->input('page', 1) - 1) * $costos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $costo = new Costo();
        return view('costo.create', compact('costo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Costo::$rules);

        $costo = Costo::create($request->all());

        return redirect()->route('costos.index')
            ->with('success', 'Costo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $costo = Costo::find($id);

        return view('costo.show', compact('costo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $costo = Costo::find($id);

        return view('costo.edit', compact('costo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Costo $costo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Costo $costo)
    {
        request()->validate(Costo::$rules);

        $costo->update($request->all());

        return redirect()->route('costos.index')
            ->with('success', 'Costo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $costo = Costo::find($id)->delete();

        return redirect()->route('costos.index')
            ->with('success', 'Costo deleted successfully');
    }
}
