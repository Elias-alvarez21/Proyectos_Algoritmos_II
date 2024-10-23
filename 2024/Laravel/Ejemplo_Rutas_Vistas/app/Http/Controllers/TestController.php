<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\{Cliente, Pedido};

class TestController extends Controller
{
    public function querys () {

      //  $clientes = Cliente::all(); Obtiene todos los registros
      //$clientes = Cliente::where('clienteId', 1)->get(); 

      /*  $clientes = Cliente::where('clienteId', '=',1)
        ->orWhere('email', 'LIKE', '%@gmail%')->get();*/
        
      /*  $clientes = Cliente::where('clienteId', '=',1)
        ->orWhere('email', 'LIKE', '%@%')->toSql();*/
 //echo $clientes;

      //  $clientes = Cliente::whereIn('clienteId', [1, 5, 20, 25])->get();
     // $clientes = Cliente::whereBetween('clienteId', [20, 30])->get();

      //$clientes = Cliente::whereBetween('clienteId', [20, 30])->orderBy('nombre')->take(5)->get();

      //$clientes = Cliente::whereBetween('clienteId', [20, 30])->count();

      /*$clientes = Cliente::leftJoin('pedidos', 'pedidos.clienteId', '=', 'clientes.clienteId')->
      select('nombre', 'pedidoId', 'fecha', 'total')->get();*/

      /*$clientes = Cliente::leftJoin('pedidos', 'pedidos.clienteId', '=', 'clientes.clienteId')
      ->whereDate('fecha', '2024-08-29')
      ->whereMonth('fecha', '08')
      ->whereYear('fecha', '2024')
      ->whereDay('fecha', '29')
      ->select('nombre', 'pedidoId', 'fecha', 'total')->get();*/

       /* $clientes = DB::table('clientes')
        ->selectRAW('clienteId id, UPPER(nombre) name, LOWER(email) correo, YEAR(created_at) as anio')
        ->whereRAW('clienteId BETWEEN ? AND ?', [50, 100])
        ->get();*/

       /* $clientes = DB::table('clientes')
                    ->join('pedidos', 'pedidos.clienteId', '=', 'clientes.clienteId')
                    ->select('nombre', 'email', DB::RAW('COUNT(pedidoId) as q, SUM(total) suma'))
                    ->groupByRaw('nombre, email')
                    ->havingRaw('q > 0')
                    ->get();*/

       // $clientes = DB::select('select * from pedidos where clienteId = :id', ['id' => 1]);

       // for($i = 1; $i < 500; $i++)
       // $clientes = DB::insert('INSERT INTO pedidos (clienteId, fecha, total) values (?, CURDATE(), ?)', [$i, ($i*100)]);

       //$clientes = DB::update('UPDATE clientes SET nombre = ?, email = ?, telefono = ? WHERE clienteId = ?', ['Emilio Ibarra', 'emilio@ibarra.com', '123456789', 944]);

      // $cliente = DB::delete('DELETE FROM clientes WHERE clienteId = ?', [944]);

       /* $cliente = Cliente::find(946);
        $cliente->delete();*/

      /*  $cliente = new Cliente();
        $cliente->nombre = 'Elías Alvarez';
        $cliente->email = 'elias@alvarez.com';
        $cliente->telefono = '';
        $cliente->direccion = 'Calle 123';
        $cliente->save();*/

        $cliente = Cliente::find(950);
        $cliente->nombre = 'Elías Jordan ÁLVAREZ';
        $cliente->email = 'jordan@alvarez.com';
        $cliente->telefono = '';
        $cliente->direccion = 'Calle Falsa 123';
        $cliente->save();

        return response()->json($cliente);
    }
}
