<?php

namespace App\Http\Controllers;


use App\Models\Propiedad as propiedad;
use App\Models\TipoPropiedad as tipo_propiedad;
use App\Models\ImagenesPropiedad;
use App\Models\OwnerPropiedad;

use Illuminate\Http\Request;
use App\Models\Owner as owner;
use Illuminate\Support\Facades\Redirect;
use Storage;
use Log;
use Auth;
use File;
use Session;

class PropiedadController extends Controller
{
    public function index()
    {
        $propiedad =  propiedad::all();
        //$id = 24;
        //$imagen = ImagenesPropiedad::where('propiedad_id', $id)->get();
        return view('propiedad.index',compact('propiedad'));
    }

    public function filtro(Request $request)
    {
        $tipo_propiedad = $request->get('tipo_propiedad');
        $precio = $request->get('precio');
        $n_dormitorios = $request->get('n_dormitorios');
        $propiedad = propiedad::where('tipo_propiedad_id','like','%' .$tipo_propiedad . '%')->
        orWhere('valor','like','%' .$precio . '%')->
        orWhere('n_dormitorios','like','%' .$n_dormitorios . '%')->
        get();

        if($propiedad->count() > 0)
        {

            $propiedad_find = propiedad::find($propiedad[0]->id);
            $propiedad_encontrada = propiedad::find($propiedad)->pluck('id');

            // // $id = propiedad::where('direccion','like','%' .$direccion . '%')->pluck('id');
            $propiedad_img =ImagenesPropiedad::wherein('propiedad_id',$propiedad_encontrada)->get();
            $bandera=1;
            return view('propiedad.detalle-propiedad',compact('bandera','propiedad_find','propiedad','propiedad_img','propiedad_encontrada'));
        }
        else{
          return redirect('/');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owner = owner::pluck('nombre','id');
        $tipo_propiedad = tipo_propiedad::pluck('nombre','id');
        return view('propiedad.create',compact('tipo_propiedad','owner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //guardo la propiedad
         //TODO agregar un estado inicial


        $propiedad = new propiedad($request->all());
        $propiedad->owner_id = $request->owner;
        $propiedad->save();


        if ($request->File('cartel')) {
            foreach($request->file('cartel') as $file)
            {

                Log::debug('dentro del foreche de imagenes');
                $imgAcc = $file;
                $imgAccName = time().'.'.$imgAcc->getClientOriginalExtension();
                //$ruta= Storage::putFileAs('public/cartel',$imgAcc);
               // $ruta= Storage::putFileAs($imgAcc,'public/cartel',$imgAccName);
                $ruta=Storage::disk('public')->put('cartel', $imgAcc);
                Log::debug('rutas y nombre');
                Log::debug('nombre '.$imgAccName.' ruta'.$imgAccName.'');
                //$propiedad = new propiedad($request->all());
                //WIP
                $ImagenesPropiedad = ImagenesPropiedad::create([
                    'propiedad_id' => $propiedad->id,
                    'tipo' => "interno",
                    'ruta' => $ruta,
                    'imagen' => $imgAccName,
                ]);


                Log::debug('guarda la imagen');
                Log::debug($ImagenesPropiedad);


            }



         }
         if($request->File('fotos'))
         {
            foreach($request->file('fotos') as $file)
            {


                Log::debug('dentro del foreche de imagenes');
                $imgAcc = $file;
                $imgAccName = time().'.'.$imgAcc->getClientOriginalExtension();
                //$ruta= Storage::putFileAs('public/cartel',$imgAcc);
               // $ruta= Storage::putFileAs($imgAcc,'public/cartel',$imgAccName);
                $ruta=Storage::disk('public')->put('fotos', $imgAcc);
                Log::debug('rutas y nombre');
                Log::debug('nombre '.$imgAccName.' ruta'.$imgAccName.'');
                //$propiedad = new propiedad($request->all());
                //WIP

                $ImagenesPropiedad = ImagenesPropiedad::create([
                    'propiedad_id' =>$propiedad->id,
                    'tipo' => "externo",
                    'ruta' => $ruta,
                ]);
                Log::debug('guarda la imagen');
                Log::debug($ImagenesPropiedad);

            }

         }


         Session::flash('success', "Solicitud actualizada con éxito");
         return redirect::to('propiedad');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $asignacion = asignacion::find($id);
        // $asignacion->fill($request->all());
        // $asignacion->save();
        // return redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
    }
}
