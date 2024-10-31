<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Libros,Autores,Categorias};
use Illuminate\Support\Facades\DB;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros=Libros::all();
        return view("Libros",compact("libros"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autores=Autores::select("autorId","nombre")->get();              //LLAME LOS METODOS DESDE ACA PORQUE NO PODIA INVOCARLOS
        //$categorias=Categorias::select("categoriaId","nombre")->get(); // MEDIANTE LAS RUTAS Y AL MISMO TIEMPO RETORNARLOS HACIA UNA VISTA
        return view("Librosform",compact('autores'/*, 'categorias'*/));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$nuevoLibro=new Libros();
            $nuevoLibro->titulo=$request->titulo;
            $nuevoLibro->autor_Id=$request->autores_Id;
            $nuevoLibro->categoria_Id=$request->categorias_Id;
            $nuevoLibro->precio=$request->precio;
            $nuevoLibro->save();
        */
        DB::insert("INSERT INTO libros (titulo, autor_Id,categoria_Id,precio)
                     VALUES ('{$request->titulo}',{$request->autores_Id}, {$request->categorias_Id},{$request->precio});");
        return redirect()->route("libros.index");
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
    public function edit($id)
    {
        //$editar=Libros::find($id);#where("libroId",$id)->get();
        $editar=DB::select("SELECT libros.* WHERE libroId={$id}");
        return view("components.container-form",["libro"=>$editar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /*$actu=Libros::find($request->id);
            $actu->titulo=$request->titulo;
            $actu->autor_Id=$request->autores;
            $actu->categoria_Id=$request->categorias;
            $actu->precio=$request->precio;
            $actu->save();
        */
        DB::update("UPDATE libros SET titulo='{$request->titulo}', autor_Id={$request->autores}, categoria_Id={$request->categorias},
                    precio{$request->precio} WHERE libroId={$id}");
        return view("Libros");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $L=DB::delete("DELETE FROM libros WHERE libroId={$id}");
        return redirect()->route("libros.index");
    }
}
