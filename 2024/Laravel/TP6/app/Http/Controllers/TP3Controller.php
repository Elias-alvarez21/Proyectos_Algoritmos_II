<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Libros,Ventas,Categorias,Autores};
use Illuminate\Support\Facades\DB;

class TP3Controller extends Controller
{

    public function __construct()
    {
        $this->middleware('Admin');
    }
    public function query() 
    {
        //$A1=Libros::all();
        //$A1=Libros::where("precio",">",50)->orderBy("titulo","ASC")->get();
        
        //$A2=Libros::join("autores","autores.autorId","=","libros.autor_Id");
        //$A2=Libros::join("categorias","categorias.categoriaId","=","libros.categoria_Id")
        //->take(50)->orderBy("libros.libroId","ASC")->get();
        
        //$A3=Libros::join("autores","autores.autorId","=","libros.autor_Id")
        //->where("autores.nombre","LIKE","A%")
        //->select("libros.*","autores.autorId","autores.nombre")->get();
        
        //$A4=Libros::all();
        //$A4=Libros::avg("precio");

        //$A5=Libros::selectRaw(" categoria_Id,COUNT(categoria_Id) as cant_totl")
        //->groupBy("categoria_Id")
        //->get();   

        //$A6=Libros::whereBetween("libroId",[10,50])
        //->avg("precio");
//--------------------------------------------------------------------------------
        /*$libro=4;
        $B1=DB::table("ventas")
        ->join("libros","libros.libroId","=","ventas.libro_Id")
        ->select("libros.nombre")
        ->where("libro_Id",$libro)
        ->count();

        return response()->json(["total de ventas"=>$B1]);*/

        //ESTA CONSULTA TIENE UN ERROR ↓
        /*$B2=DB::table("autores")
        ->join("libros","libros.autor_Id","=","autores.autorId")
        ->select("autores.autorId","autores.nombre",DB::RAW('COUNT(libros.libroId) as cant_libors'),DB::RAW('SUM(libros.precio) as precio_total'))
        ->groupByRaw("autores.autorId","autores.nombre")->get();
        return response()->json(["Resumen"=>$B2])->get();*/

        /*$B3=DB::table("libros")
        ->select("categoria_Id",DB::RAW("avg(precio) as prom_precio"))
        ->groupBy("categoria_Id")->get();
        return response()->json($B3);*/

        //ESTA CONSULTA TIENE UN ERROR ↓
        /*$B4=DB::table("categorias")
        ->join("libros","libros.categoria_Id", "=", "categorias.categoriaId")
        ->select("categorias.nombre",DB::RAW("COUNT(categorias.categoriaId) as cant_categ"))
        ->where("cant_categ" ,">", 10)
        ->get();
        return response()->json(["categorias"=>$B4]);*/

        /*$B5=DB::table("libros")->select("*")
        ->where("categoria_Id","=",2)->orwhere("categoria_Id","=",4)
        ->orwhere("categoria_Id","=",6)->orwhere("categoria_Id","=",8)->get();
        return response()->json($B5);*/

        $B6=DB::table("libros")
        ->select("autor_Id",DB::Raw("Max(precio) as precio_max"))
        ->groupBy("autor_Id")->get();
        return response()->json($B6);
    }

}
