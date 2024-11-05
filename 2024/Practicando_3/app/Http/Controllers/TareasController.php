<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB,Auth};

class TareasController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
        $T=DB::select("SELECT u.name, t.* FROM tareas t INNER JOIN users u ON u.id=t.usuario_Id 
                        ORDER BY t.tareaId");
        //$T = collect($T)->map(function ($item) { return (object) $item; })->all();
        return view("Tareas.table",compact("T"));
        //FALTA EL LAYOUT.BLADE.PHP

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Tareas.store");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::insert("INSERT INTO tareas (usuario_Id,prioridad,descripcion,vencimiento,alta,estado)
        VALUES ({$request->usuario_id},{$request->prioridad},'{$request->descripcion}','{$request->vencimiento}','{$request->alta}','{$request->estado}')");
        return redirect()->route("tareas.index");
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
        $T=DB::select("SELECT * FROM tareas WHERE TareaId={$id} LIMIT 1");//ACORDATE DE ESTA VERGA
        return view("Tareas.store",compact("T"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::delete("DELETE FROM tareas WHERE TareaId={$id}");
        return redirect()->route("tareas.index");
    }
}
