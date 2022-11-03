<?php

namespace App\Http\Controllers;

use App\Models\Cliente as cliente;
use App\Models\TipoPropiedad as tipo_propiedad;
use App\Models\ImagenesPropiedad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Storage;
use Log;
use Auth;
use File;
use Session;

class ClienteController extends Controller
{
     public function index()
    {
        $cliente =  cliente::all();
        return view('cliente.index',compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bandera = 1;
        return view('cliente.create',compact('bandera'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cliente = new cliente($request->all());
        $cliente->save();
        return redirect('/crear-perfil-clientes');
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

    public function volver()
    {
        $bandera = 2;
        $ultimoUsuario = cliente::latest('id')->first();

        return view('cliente.create-perfil',compact('bandera','ultimoUsuario'));

    }

    public function GuardarPerfil(Request $request)
    {
        $cliente = cliente::find($request->id);
        $cliente->fill($request->all());
        $cliente->save();
        return  redirect('/clientes');

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
        $cliente = cliente::find($id);
        $cliente->fill($request->all());
        $cliente->save();
        return redirect::back();
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
