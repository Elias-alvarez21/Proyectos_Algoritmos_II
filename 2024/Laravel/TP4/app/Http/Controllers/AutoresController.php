<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autores;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$autores=Autores::select("autorId","nombre")->get();//REALICE ESTE SELECT DESDE EL CONTROLADOR Libros PORQUE NO PODIA INVOCAR AL METODO INDEX EN NINGUNA RUTA
        //return view("librosform",["aut"=>$autores]);
        $autores=Autores::all();
        return view("autores", ["autores"=>$autores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("components.autores-form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
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
        //
    }
}
