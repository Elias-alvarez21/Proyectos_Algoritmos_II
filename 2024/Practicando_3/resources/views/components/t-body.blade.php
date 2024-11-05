<div>
    <td>{{ $tar->TareaId }}</td>
    <td>{{ $tar->name }}</td>    
    <td>{{ $tar->descripcion }}</td>
    <td>{{ $tar->alta }}</td>
    <td>
        <div class="progress">
            <div class="determinate green" style="width: 60%"></div>
        </div>
    </td>
    <td>{{ $tar->vencimiento }}</td>
    <td><span class="new badge grey" data-badge-caption="">{{ $tar->estado }}</span></td>  
    <td style="text-align:center;"><a href="store.html" class="btn blue btn-small"><i class="fas fa-edit"></i></a></td>
    <td style="text-align:center;">
        <form action="#" method="POST"> @csrf @method("delete")
            <button type="submit" class="btn red btn-small" onclick="return confirm('¿Desea eliminar la tarea?')"><i class="fas fa-window-close"></i></button>
        </form>
    </td>
</div>