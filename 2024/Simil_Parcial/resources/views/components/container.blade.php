
<div>
    <form action="{{$a}}" method="{{$m}}">
        @csrf
        
        <x-input-form label="Legajo" type="number" name="Legajo"/>
        {{-- <x-select-form :name="" :leyenda="" :options="" /> --}}
        <x-select-form name="Area" leyenda="Area/Sector" :options=$areas />
        <x-input-form label="Apellido" type="text" name="apellido"/>
        <x-input-form label="Nombre" type="text" name="nombre"/>
        <x-input-form label="Fecha de Ingreso"  type="date" name="Fecha"/>
        <button type="submit" class="btn btn-primary">CARGAR</button>
    </form>
</div>

