<tr>
    <td>{{$cliente->clienteId}}</td>
    <td>{{$cliente->nombre}}</td>
    <td>{{$cliente->email}}</td>
    <td><i class="fas fa-phone"></i> +{{$cliente->telefono}}</td>
    <td>{{$cliente->direccion}}</td>
    <td><a href="{{route('pedido.create', $cliente->clienteId)}}"><button class="btn btn-primary">NUEVO</button></a></td>
    <td><form action="{{route('clientes.destroy', $cliente->clienteId)}}" method="POST">
        @csrf @method('DELETE')
        <button type="submit" class="btn btn-danger">ELIMINAR</button></form></td>
</tr>