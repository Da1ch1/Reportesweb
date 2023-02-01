<?php

namespace App\Http\Controllers;

use App\Models\Stat;
use Illuminate\Http\Request;

/**
 * Class StatController
 * @package App\Http\Controllers
 */
class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = Stat::paginate();

        return view('stat.index', compact('stats'))
            ->with('i', (request()->input('page', 1) - 1) * $stats->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stat = new Stat();
        return view('stat.create', compact('stat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Stat::$rules);

        $stat = Stat::create($request->all());

        return redirect()->route('stats.index')
            ->with('success', 'Stat created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stat = Stat::find($id);

        return view('stat.show', compact('stat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stat = Stat::find($id);

        return view('stat.edit', compact('stat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Stat $stat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stat $stat)
    {
        request()->validate(Stat::$rules);

        $stat->update($request->all());

        return redirect()->route('stats.index')
            ->with('success', 'Stat updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $stat = Stat::find($id)->delete();

        return redirect()->route('stats.index')
            ->with('success', 'Stat deleted successfully');
    }
}
