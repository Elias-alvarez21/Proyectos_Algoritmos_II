<?php

namespace App\Http\Controllers;
use App\Models\{Ventas,Autos,Clientes};
use Illuminate\Http\Request;

class VentasController extends Controller
{

     public function __construct()
     { //IMPLEMENTAR BIEN LA LOGICA DE LA AUTORIZACION, esta mal implentada porque un middleware impide al otro (usuario y admin)
         $this->middleware("auth");
        //$this->middleware("Lectura")->only("index");
         //$this->middleware("Usuario")/*->except("destroy")*/;
         //$this->middleware("Admin")->only(["index","edit","store","create","update","destroy","show"]);
     }

    public function index()
    {
      $todos=Ventas::join("autos","autos.autoId","=","ventas.auto_Id")
        ->join("clientes","clientes.clienteId","=","ventas.cliente_Id")
        ->select("ventas.*","autos.autoId","autos.marca","autos.modelo",
        "clientes.clienteId","clientes.nombre","clientes.apellido")
        ->orderBy("ventas.ventaId","ASC")->get();
      return view('Ventas.main',compact("todos"));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autos=Autos::all(["autoId","marca","modelo"]);//    SE LOS PIDO AL MODELO DE CADA TABLA 
        $clientes=Clientes::all(["clienteId","nombre","apellido"]);

        $optionsAutos=$autos->map(function($auto) {return ["value"=>$auto->autoId, "texto"=>$auto->marca. ' ' .$auto->modelo];})->toArray();
        $optionsClientes=$clientes->map(function($cliente) {return ["value"=>$cliente->clienteId, "texto"=>$cliente->nombre. ' ' .$cliente->apellido];})->toArray();
        $editVenta=null;
        
        return view("Ventas.mainForm",compact("optionsAutos","optionsClientes","editVenta"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevaVenta= new Ventas();
        $nuevaVenta->fecha_realizada=$request->fecha_realizada;
        $nuevaVenta->precio_total=$request->precio_total;
        $nuevaVenta->auto_Id=$request->auto_Id;
        $nuevaVenta->cliente_Id=$request->cliente_Id;
        $nuevaVenta->save();
        return redirect()->route("home");
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
    public function edit($ventaId)
    {
        $autos=Autos::all(["autoId","marca","modelo"]);//    SE LOS PIDO AL MODELO DE CADA TABLA 
        $clientes=Clientes::all(["clienteId","nombre","apellido"]);
        $optionsAutos=$autos->map(function($auto) {return ["value"=>$auto->autoId, "texto"=>$auto->marca. ' ' .$auto->modelo];})->toArray();
        $optionsClientes=$clientes->map(function($cliente) {return ["value"=>$cliente->clienteId, "texto"=>$cliente->nombre. ' ' .$cliente->apellido];})->toArray();
 
        $editVenta=Ventas::find($ventaId);
        
        return view("Ventas.mainForm",compact("editVenta","optionsAutos","optionsClientes"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $actVenta=Ventas::find($id);
        $actVenta->fecha_realizada=$request->fecha_realizada;
        $actVenta->precio_total=$request->precio_total;
        $actVenta->auto_Id=$request->auto_Id;
        $actVenta->cliente_Id=$request->cliente_Id;
        $actVenta->save();

        return view("Ventas.main");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $elimVenta=Ventas::find($id);
        $elimVenta->delete();
        return redirect()->route("ventas.index");
    }
}
