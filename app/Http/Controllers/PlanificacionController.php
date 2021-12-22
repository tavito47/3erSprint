<?php

namespace App\Http\Controllers;

use App\Models\Planificacion;
use Illuminate\Http\Request;

class PlanificacionController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planificaciones=Planificacion::all();
        return view('planificacion.index',compact('planificaciones'));

        // $test = planificacion::find(1);
        // dd($test->PathFile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planificacion.create');
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

        $files = $request->file();
        $flag = 0;
        foreach ($files as $file) {
            $aux = "";
            $aux =time().'_'.$file->getClientOriginalName();
            $file->move(public_path('Archivos'),$aux);

            if($flag==0){
                $name1 = $aux;
                $aux="";
                $flag++;
            }
            if($flag != 0){
                $name2 = $aux;
            }

            
        } 
    
        $input["documento"] = $name1;
        $input["documento2"] = $name2;
        
        Planificacion::create($input);

        $planificaciones=Planificacion::all();
        //return view('planificacion.index',compact('planificaciones'));
        return redirect('planificacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('planificacion.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planificacion=Planificacion::find($id);
        // dd($planificacion);
        return view('planificacion.edit',compact('planificacion'));

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
        $planificacion=Planificacion::find($id);
        $planificacion->update($request->all());
        return redirect()->route('planificacion.index')->with('success','planificacion actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planificacion=Planificacion::find($id);
        $planificacion->delete();
        return redirect()->route('planificacion.index')->with('success','planificacion eliminada');
    }
}
