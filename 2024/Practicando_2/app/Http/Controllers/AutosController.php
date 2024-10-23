<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autos;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autos=Autos::all();
        return view("Autos.Table",compact("autos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Autos.Form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $a=new Autos();
        $a->marca=$request->marca;
        $a->modelo=$request->modelo;
        $a->año=$request->año;
        $a->color=$request->color;
        $a->precio=$request->precio;
        $a->save();
        return view("home");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $a=Autos::find($id);
        $a->delete();
        return redirect()->route("auto.index");
    }
}
