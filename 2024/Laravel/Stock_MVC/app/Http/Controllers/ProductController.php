<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\{Category, Movement, Product};

class ProductController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        $products = DB::table('products')
        ->join('categories', 'categories.idcategory', '=', 'products.idcategory')
        ->join('movements', 'movements.idproduct', '=', 'products.idproduct')
        ->select('products.idproduct', 'products.idcategory', 'categories.description', 'products.denomination', 'products.additional_info', 'products.price', 'products.stock', 'products.enabled', DB::raw('COUNT(idmovement) AS q_movements'))
        ->groupBy('products.idproduct', 'products.idcategory', 'categories.description', 'products.denomination', 'products.additional_info', 'products.price', 'products.stock', 'products.enabled')
        ->paginate(5);

         return view('products.catalogue', ['categories' => $categories, 'products' => $products]);
    }

    public function store(Request $request)
    {
        if($request->idproduct == 0) 
           $product = new Product(); 
        else 
        $product = Product::find($request->idproduct); 
       
        $product->idcategory = $request->category;
        $product->denomination = $request->denomination;
        $product->additional_info = $request->info;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
    
        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente');
    }

    public function destroy($id)
    {
        Movement::where('idproduct', $id)->delete();
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto ID'.$id.' eliminado correctamente');
    }

    public function state($id)
    {
        $product = Product::find($id);
        $state = !boolval($product->enabled);
        $product->enabled = $state;
        $product->save();
        return json_encode(array("message" => "Se actualizó el estado del producto ID {$id}", 204));
    }
}
