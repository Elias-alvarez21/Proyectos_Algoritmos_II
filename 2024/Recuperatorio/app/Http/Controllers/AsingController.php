<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AsingController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $todo=DB::select("SELECT A.*, ar.*, r.* FROM Asignacions A INNER JOIN areas ar ON A.areas=ar.AreasId
                            INNER JOIN r_r_h_h_s r ON A.rrhh=r.RRHH_Id ORDER BY A.Asing_Id");
        $areas=DB::select("SELECT * FROM areas");
        $rrhh=DB::select("SELECT * FROM r_r_h_h_s");
        //dd($todo);
        return view("rrhh",compact("todo","areas","rrhh"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $Areas=DB::select("SELECT * FROM areas");
        // $RRHH=DB::select("SELECT * FROM r_r_h_h_s");

        // return view("rrhh",compact("areas","rrhh"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        if(($request->Habilitado)=="on")
        {
            $Habi=1;
        }else{
            $Habi=0;
        }
       $x=DB::insert("INSERT INTO asignacions (rrhh,areas,fecha,habilitado) 
       VALUES({$request->RRHH},{$request->areas},'{$request->fecha}',{$Habi})");
       //var_dump($x);
        return redirect()->route("asing.index");
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
       (($request->habilitado)=="on")?$Habi=1 :$Habi=0 ;

       $x=DB::update("UPDATE asignacions SET rrhh={$request->RRHH},areas={$request->areas},fecha='{$request->fecha}',habilitado=$Habi WHERE Asing_Id={$id} ");
       //dd($request);
       return redirect()->route("asing.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $x=DB::delete("DELETE FROM asignacions WHERE Asing_Id={$id}");
        //dd($x);
        return redirect()->route("asing.index");
    }
}
