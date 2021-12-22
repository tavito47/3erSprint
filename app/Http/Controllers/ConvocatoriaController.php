<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convocatorias=Convocatoria::all();
        return view('convocatoria.index',compact('convocatorias'));

        // $test = Convocatoria::find(1);
        // dd($test->PathFile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('convocatoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->except('_token');
        if($request->hasfile('file')){
            
            $archivo=$request->file('file');
            $input ['documento']=time().'_'.$archivo->getClientOriginalName();
            
            $archivo->move(public_path('Archivos'),$input['documento']);
        }
        
        Convocatoria::create($input);

        $convocatorias=Convocatoria::all();
        //return view('convocatoria.index',compact('convocatorias'));
        return redirect('convocatoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $convocatoria=Convocatoria::find($id);
        // dd($convocatoria);
        return view('convocatoria.edit',compact('convocatoria'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $convocatoria=Convocatoria::find($id);
        $convocatoria->update($request->all());
        return redirect()->route('convocatoria.index')->with('success','convocatoria actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $convocatoria=Convocatoria::find($id);
        $convocatoria->delete();
        return redirect()->route('convocatoria.index')->with('success','convocatoria eliminada');
    }
}
