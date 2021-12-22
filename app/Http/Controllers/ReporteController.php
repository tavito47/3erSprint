<?php

namespace App\Http\Controllers;
use App\Models\Reporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
        // TAREA TERMINAR
    public function aceptar(Request $request){

        $input=$request->except('_token');
            if($request->hasfile('file')){
                
                $archivo=$request->file('file');
                $input ['documento']=time().'_'.$archivo->getClientOriginalName();
                
                $archivo->move(public_path('Archivos'),$input['documento']);



            }  
            
            $reportes = Reporte::create(['documento'=>$input['documento'],
            'observacion'=>'ninguna',
            'planificacion_id'=>$request->planificacion_id]);
//'http://127.0.0.1:8000/archivos/' eso es de prueba en mi maquina
//cambiar la ruta del servidor
            $documento = 'http://127.0.0.1:8000/archivos/'.$reportes->documento;
            $to_name = 'gustavo El MOLE';
            $to_email = 'gustavoalvarad65@gmail.com';
            $from_email = $request->correo;
            $data = array('observacion'=> 'Aceptado los documentos', 'body' => 'Se envio el contrato','documento'=> $documento);
            Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email,$from_email) {
            $message->to($from_email, $to_name)
            ->subject('B.tec_TIS');
            $message->from($to_email,'EMPRESA B.TEC_TIS');
            });
        
        return redirect('planificacion');
    }



    public function rechazar(Request $request ){
        
        $reportes = Reporte::create(['documento'=>' ',
            'observacion'=>$request->observacion,
            
            'planificacion_id'=>$request->planificacion_id]);
            
            $to_name = 'gustavo El MOLE';
            $to_email = 'gustavoalvarad65@gmail.com';
            $from_email = $request->correo;
            $data = array('observacion'=> $reportes->observacion, 'body' => 'Tu documento fue revisado','documento'=>'');
            Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email,$from_email) {
            $message->to($from_email, $to_name)
            ->subject('B.tec_TIS');
            $message->from($to_email,'EMPRESA B.TEC_TIS');
            });

        return redirect('planificacion');
    }
}
