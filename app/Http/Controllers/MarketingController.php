<?php

namespace App\Http\Controllers;

use App\Models\Marketing;
use Illuminate\Http\Request;
use App\Models\Mkejecutivo;

/**
 * Class MarketingController
 * @package App\Http\Controllers
 */
class MarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marketings = Marketing::paginate();

        return view('marketing.index', compact('marketings'))
            ->with('i', (request()->input('page', 1) - 1) * $marketings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marketing = new Marketing();
        $mkejecutivos=Mkejecutivo::pluck('nombre','id');
        return view('marketing.create', compact('marketing','mkejecutivos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Marketing::$rules);

        $marketing = Marketing::create($request->all());

        return redirect()->route('marketings.index')
            ->with('success', 'Marketing created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marketing = Marketing::find($id);

        return view('marketing.show', compact('marketing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marketing = Marketing::find($id);
        $mkejecutivos=Mkejecutivo::pluck('nombre','id');
        return view('marketing.edit', compact('marketing','mkejecutivos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Marketing $marketing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marketing $marketing)
    {
        request()->validate(Marketing::$rules);

        $marketing->update($request->all());

        return redirect()->route('marketings.index')
            ->with('success', 'Marketing updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $marketing = Marketing::find($id)->delete();

        return redirect()->route('marketings.index')
            ->with('success', 'Marketing deleted successfully');
    }
}
