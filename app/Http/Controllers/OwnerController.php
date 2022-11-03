<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner as owner;
use Illuminate\Support\Facades\Redirect;

class OwnerController extends Controller
{
    public function index()
    {
        $owner = owner::all();
       return view('owner.index',compact('owner'));
    }
    public function store(Request $request)
    {
        $owner = new owner($request->all());
        $owner->save();
        return back();

    }
    public function update(Request $request , $id)
    {
        $owner = owner::find($id);
        $owner->fill($request->all());
        $owner->save();
        return redirect::back();

    }
    public function destroy($id)
    {
        $owner = owner::find($id);
        $owner->delete();
        return redirect::back();
    }
}
