<div class="card card-body">
    <form action="{{$action}}" method="{{$method}}">
        @csrf
        <x-input-form leyenda="Fecha de Realización" tipo="date" nombre="fecha" /> 
        <x-input-form leyenda="Total" tipo="number" nombre="total" />
        <x-input-form Leyenda="" tipo="hidden" nombre="clienteId" id="{{$id}}" />
        <button type="submit" class="btn btn-primary">Guardar</button>
            
    </form>
</div>