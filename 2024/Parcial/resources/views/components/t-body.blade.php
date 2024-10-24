<div>
    <tr>
        <td>{{$a->tareasId}}</td>
        <td>{{$a->name}}</td>
        <td>{{$a->descripcion}}</td>
        <td>{{$a->alta}}</td>
        <td>{{$a->prioridad}}</td>
        {{-- <td>
            <div class="progress" value="{{($a->prioridad)*10}}">
                <div class="determinate"   aria-valuemax="100"></div>
            </div>
        </td> --}}
        <td>{{$a->vencimiento}}</td>
        <td><span class="new badge green" data-badge-caption="">FINALIZADA</span></td>  
        <td style="text-align:center;"><a href="{{ route('tareas.edit',$a->tareasId) }}" class="btn blue btn-small"><i class="fas fa-edit"></i></a></td>
        <td style="text-align:center;">
            <form action="{{ route('tareas.delete',$a->tareasId) }}" method="POST">
                @csrf @method("DELETE")
                <button type="submit" class="btn red btn-small" onclick="return confirm('¿Desea eliminar la tarea?')"><i class="fas fa-window-close"></i></button>
            </form>
        </td>
    </tr>
</div>