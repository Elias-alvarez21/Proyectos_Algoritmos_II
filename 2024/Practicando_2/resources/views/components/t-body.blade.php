<div>
    <tr>
        <td><div style="display: flex; gap: 10px;">
            <form action="{{route('ventas.delete',$todo->ventaId)}}" method="POST">@csrf @method("delete")<button class="btn btn-outline-danger">ELIMINAR</button></form>
            <form action="{{route('ventas.edit',$todo->ventaId)}}"><button class="btn btn-outline-warning" type="submit">ACTUALIZAR</button></form>
        </div>
        </td>
        <td>{{$todo->ventaId}}</td>
        <td>{{$todo->fecha_realizada}}</td>
        <td>{{$todo->precio_total}}</td>
        <td>{{($todo->auto_Id == $todo->autoId)?$todo->marca." ".$todo->modelo : "no tiene"}}</td>
        <td>{{($todo->cliente_Id == $todo->clienteId)?$todo->nombre." ".$todo->apellido : "no tiene"}}</td>
    </tr>
</div>