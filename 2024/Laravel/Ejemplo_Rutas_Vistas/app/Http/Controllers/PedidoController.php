<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $listadoPedido = Pedido::where('clienteId', $id)->get();
        return view('pedidos.new', ['id' => $id, 'pedidos'=> $listadoPedido]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newPedido = new Pedido();
        $newPedido->clienteId = $request->idcliente;
        $newPedido->fecha = $request->fecha;
        $newPedido->total = $request->precio;
        $newPedido->save();
        return redirect()->route('pedido.create', ['id' => $request->idcliente])->with('message', 'Pedido creado correctamente');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      
        
    }
}
