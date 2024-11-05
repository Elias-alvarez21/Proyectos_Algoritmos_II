<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TareasController extends Controller
{
    
    // public function __construct(){
    //     $this->middleware("auth");
    // }
    public function index()
    {
        $all=DB::Table("tareas")->join("Users","users.id","=","tareas.User_Id")
        ->select("tareas.*","users.*")->orderBy("tareas.tareasId","ASC")->get();
        //var_dump($all);
        return view("grid",compact("all"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        // $id=Auth::User()->id;
        // $U=DB::Table("users")->select("users.*")->where("users.id",$id)->first();
       
        /*$U=DB::Table("tareas")->join("Users","users.id","=","tareas.User_Id")
        ->select("tareas.User_Id","users.name")->orderBy("tareas.User_Id","ASC")->get();*/
        //var_dump($U);



    return view("store"/*,compact("U")*/);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //var_dump($request);
        $T=DB::insert("INSERT INTO tareas (User_Id,descripcion,alta,prioridad,vencimiento,estado) 
        VALUES ({$request->usuario},'{$request->descripcion}','{}',{$request->prioridad},'{$request->vencimiento}','{$request->estado}')");
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
        $all=DB::Table("tareas")->select("tareas.*")
        ->where("tareasId",$id)->first();
        //var_dump($all);
        return view("store",compact("all"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $T=DB::update("UPDATE tareas SET User_Id={$request->usuario},descripcion='{$request->descripcion}',alta='{$request->alta}',prioridad={$request->prioridad}, vencimiento='{$request->vencimiento}', estado='{$request->estado}' WHERE tareasId={$request->tareaId}");
        return redirect()->route("tareas.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $T=DB::delete("DELETE FROM tareas WHERE tareasId={$id}");
         return redirect()->route("tareas.index");
    }
}
