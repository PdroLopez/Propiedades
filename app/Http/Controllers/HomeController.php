<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\TipoPropiedad as tipo_propiedad;
use App\Models\Propiedad as propiedad;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $tipo_propiedad = tipo_propiedad::pluck('id','nombre');
        // $this->middleware('auth');
        return view('welcome',compact('tipo_propiedad'));
    }
    public function logout(Request $request)
	{
	    Auth::logout();

	    $request->session()->invalidate();

	    $request->session()->regenerateToken();

	    return redirect('/');
	}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tipo_propiedad = tipo_propiedad::pluck('nombre','id');

        // $this->middleware('auth');
        return view('welcome',compact('tipo_propiedad'));
    }
}
