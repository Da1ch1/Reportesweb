<?php

namespace App\Http\Controllers;

use App\Models\Regimen;
use Illuminate\Http\Request;

/**
 * Class RegimenController
 * @package App\Http\Controllers
 */
class RegimenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regimens = Regimen::paginate();

        return view('regimen.index', compact('regimens'))
            ->with('i', (request()->input('page', 1) - 1) * $regimens->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regimen = new Regimen();
        return view('regimen.create', compact('regimen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Regimen::$rules);

        $regimen = Regimen::create($request->all());

        return redirect()->route('regimens.index')
            ->with('success', 'Regimen created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $regimen = Regimen::find($id);

        return view('regimen.show', compact('regimen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regimen = Regimen::find($id);

        return view('regimen.edit', compact('regimen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Regimen $regimen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regimen $regimen)
    {
        request()->validate(Regimen::$rules);

        $regimen->update($request->all());

        return redirect()->route('regimens.index')
            ->with('success', 'Regimen updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $regimen = Regimen::find($id)->delete();

        return redirect()->route('regimens.index')
            ->with('success', 'Regimen deleted successfully');
    }
}
