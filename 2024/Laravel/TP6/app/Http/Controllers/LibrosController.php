<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Libros,Autores,Categorias};
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;

class LibrosController extends Controller
{

    public function __construct()
    {
        $this->middleware('Admin');
    }
    
    public function index()
    {
        $libros=Libros::where("libroId",1001)->get();
        //$libros=Libros::all();//COMANDO SQL "SELECT * FROM libros"
        #$autor_libro=$libros->autor_Id;
        return view("Libros",["libros"=>$libros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autores=Autores::select("autorId","nombre")->get();           //LLAME LOS METODOS DESDE ACA PORQUE NO PODIA INVOCARLOS
        $categorias=Categorias::select("categoriaId","nombre")->get();// MEDIANTE LAS RUTAS Y AL MISMO TIEMPO RETORNARLOS HACIA UNA VISTA
        return view("Librosform",["autores"=>$autores,"categorias"=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$imagen_1=$request->file('imagen')->getClientOriginalName();    
        // Almacena el archivo de imagen y obtiene la ruta
        $rutaLocal = $request->file('imagen')->store('imagenes_archivos', 'public');
    
        
        $nuevoLibro = new Libros();
        $nuevoLibro->titulo = $request->titulo;
        $nuevoLibro->autor_Id = $request->autores;
        $nuevoLibro->categoria_Id = $request->categorias;
        $nuevoLibro->precio = $request->precio;
        $nuevoLibro->imagen = $request->imagen->getClientOriginalName();
        $nuevoLibro->ruta=$rutaLocal; // Guardar la ruta de la imagen
        $nuevoLibro->save();
    
        return redirect()->route('libros.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($ruta)
    {
        return view("vistazoIMG",["ruta"=>$ruta]);
    }

    public function busqueda($imagen)
    {
        $ruta=storage_path('app/public/imagenes_archivos/'.$imagen);
        return Storage::get($ruta);//Storage::disk('public')->get('imagenes_archivos/'.$imagen);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editar=Libros::find($id);#where("libroId",$id)->get();
        return view("Librosform",["editLib"=>$editar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $actu=Libros::find($request->id);
        $actu->titulo=$request->titulo;
        $actu->autor_Id=$request->autores;
        $actu->categoria_Id=$request->categorias;
        $actu->precio=$request->precio;
        $actu->save();
        return view("Libros");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
