<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function create()
    {
        return view('Clientes');
    }

    public function store(Request $request)
    {
       $newCliente = new Cliente();
       $newCliente->nombre = $request->nombre; 
       $newCliente->email = $request->email; 
       $newCliente->telefono = $request->telefono; 
       $newCliente->direccion = $request->direccion;
       $newCliente->save();

//var_dump($request);

       return redirect()->route('cliente.create')->with('success', 'Cliente Creado correctamente bajo el id '.$newCliente->clienteId); 
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);    
        return view('Clientes', ['cliente' => $cliente]); 
    }

    public function update(Request $request, $id)
    {
        $editCliente = Cliente::find($id);
        $editCliente->nombre = $request->nombre; 
        $editCliente->email = $request->email; 
        $editCliente->telefono = $request->telefono; 
        $editCliente->direccion = $request->direccion;
        $editCliente->save();
        return redirect()->route('cliente.edit', $id)->with('success', "El cliente {$id} se actualizó correctamente");    
    }

    public function destroy(string $id)
    {
        $deleteCliente = Cliente::find($id);
        $deleteCliente->delete();
        return redirect()->route('clientes.index')->with('message', 'Cliente Eliminado');
    }
}
