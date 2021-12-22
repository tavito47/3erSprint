<?php

namespace App\Http\Controllers;

use App\Models\Pliego;
use Illuminate\Http\Request;

class PliegoController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pliegos=Pliego::all();
        return view('pliegos.index',compact('pliegos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pliegos.create');
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
            
            Pliego::create($input);

            $pliegos=Pliego::all();
        //sreturn view('pliegos.index',compact('pliegos'));
        return redirect('pliegos');
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
        $pliego=Pliego::find($id);
        return view('pliegos.edit',compact('pliego'));
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
        $pliego=Pliego::find($id);
        $pliego->update($request->all());
        return redirect()->route('pliegos.index')->with('success','pliego actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pliego=Pliego::find($id);
        $pliego->delete();
        return redirect()->route('pliegos.index')->with('success','pliego eliminado');
    }
}
