<div>
    <tr>
        <td>{{ $p->legajo }}</td>
        <td style="display:none">{{ $p->personasId }}</td>
        <td>{{ $p->area_nombre  }}</td>
        <td>{{ $p->apellido }}</td>
        <td>{{ $p->nombre }}</td>
        <td>{{ $p->fecha_ingreso }}</td>
        <td>{{ $p->estado}}</td>
        <td style="text-align:center;"><a href="{{ route('personas.edit',$p->personasId) }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"><i class="fas fa-edit" aria-hidden="true"></i></a></td>
    <td style="text-align:center;">
       <form action="{{ route('personas.destroy',$p->personasId) }}" method="POST">
        @method("DELETE") @csrf
           <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Desea eliminar el producto?')"><i class="fas fa-window-close" aria-hidden="true"></i>
            </button>
        </form>
    </td>
    </tr>    
</div>