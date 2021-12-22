<?php

namespace App\Http\Controllers;

use App\Models\Fase;
use Illuminate\Http\Request;

/**
 * Class FaseController
 * @package App\Http\Controllers
 */
class FaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fases = Fase::paginate();

        return view('fase.index', compact('fases'))
            ->with('i', (request()->input('page', 1) - 1) * $fases->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fase = new Fase();
        return view('fase.create', compact('fase'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Fase::$rules);

        $fase = Fase::create($request->all());

        return redirect()->route('fases.index')
            ->with('success', 'Fase created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fase = Fase::find($id);

        return view('fase.show', compact('fase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fase = Fase::find($id);

        return view('fase.edit', compact('fase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Fase $fase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fase $fase)
    {
        request()->validate(Fase::$rules);

        $fase->update($request->all());

        return redirect()->route('fases.index')
            ->with('success', 'Fase updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fase = Fase::find($id)->delete();

        return redirect()->route('fases.index')
            ->with('success', 'Fase deleted successfully');
    }
}
