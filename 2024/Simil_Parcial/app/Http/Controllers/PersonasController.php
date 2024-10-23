<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PersonasController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $pers=DB::table("personas")
        ->join("areas","areas.area_Id", "=", "personas.area_id")
        ->select("personas.*","areas.*")
        ->orderBy("personas.personasId", "ASC")
        ->get();
        #var_dump($pers);
        //return view("list",compact("pers"));  -----VISTA SIMPLE
        return view("Personas.main",compact("pers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $areas=DB::table("areas")
        ->select("areas.*")->get();
        //return view("save", compact("areas"));
        return view("components.container",compact("areas"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $L=DB::insert("INSERT INTO personas (legajo,area_id,apellido,nombre,fecha_ingreso,estado) 
                        VALUES ({$request->Legajo}, {$request->Area}, '{$request->Apellido}', '{$request->Nombre}', '{$request->Fecha}', '{$request->Estado}');");
        //var_dump($L);
        return redirect()->route("personas.index");
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
        $L=DB::table("personas")
        ->join("areas","areas.area_Id", "=", "personas.area_id")
        ->select("personas.*","areas.*")->where("personas.personasId","=",$id)
        ->orderBy("personas.personasId", "ASC")
        ->first();
        $areas=DB::table("areas")
        ->select("areas.*")->get();
        #var_dump($L);
        return view("save",compact("L","areas"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $L=DB::update("UPDATE personas SET legajo={$request->Legajo},area_id={$request->Area},apellido='{$request->Apellido}',nombre='{$request->Nombre}',fecha_ingreso={$request->Fecha},estado='{$request->Estado}' WHERE personasId={$id} ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $L=DB::delete("DELETE FROM personas WHERE personasId={$id};");
        return redirect()->route("personas.index");
    }
}
