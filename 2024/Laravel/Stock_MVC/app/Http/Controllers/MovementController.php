<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Movement, Product};
use Illuminate\Support\Facades\DB; 

class MovementController extends Controller
{
    public function index($id)
    {
        $product = Product::find($id);
        $movements = DB::table('movements')
        ->select('movements.idmovement', 'movements.created_at', 'movements.quantity', 'movements.observations')
        ->where('movements.idproduct', '=', $id)
        ->paginate(5);
       
         return view('movements.history', ['idproduct'=> $id, "nombreproducto" => $product->denomination,'movements' => $movements]);
    }
    
    public function store(Request $request)
    {
        $product = Product::find($request->idproduct);
        $stock = $product->stock;

        $quantity = ($request->type=='SALIENTE' ? -$request->quantity : $request->quantity);

        if($stock >= $request->quantity || $request->type == 'ENTRANTE') {
        $movement = new Movement(); 
        $movement->idproduct = $request->idproduct;
        $movement->quantity = $quantity;
        $movement->observations = $request->observations;
        $movement->save();
        $product->stock = $stock + $quantity;
        $product->save();
        $response = array('state' => 'success', 'message' => 'Movimiento registrado correctamente');
        } else {
            $response = array('state' => 'error', 'message' => 'Stock Insuficiente');
        }

        return redirect()->route('movements.index', $request->idproduct)->with($response['state'], $response['message']);
    }

    
    public function destroy($id)
    {
        $movement = Movement::find($id);
        $idproduct =  $movement->idproduct;
        $movement->delete();
        return redirect()->route('movements.index', $idproduct)->with('success', 'Movimiento ID'.$id.' eliminado correctamente');
    }
}
