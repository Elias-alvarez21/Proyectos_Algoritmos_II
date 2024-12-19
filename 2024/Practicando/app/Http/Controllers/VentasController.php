<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use Illuminate\Support\Facades\DB;

class VentasController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }
    
    public function index()
    {
        $array=DB::select("SELECT v.*,l.titulo FROM ventas v 
        INNER JOIN libros l ON v.libro_Id=l.libroId ORDER BY v.ventaId ASC"); 
        $ident="ventas";
        return view("Tabla",compact("array", "ident"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        #$ventaXid=Ventas::find($id);
        $ventaXid=Ventas::where("libro_Id",$id)->get();
        return view("VentaXid",["id"=>$id,"venta"=>$ventaXid]);
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
