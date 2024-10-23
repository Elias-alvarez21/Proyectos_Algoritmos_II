<div class="container mt-5">
    <h1>INSERTAR/ACTUALIZAR UNA VENTA</h1>
    {{-- IMPORTANTE RECORDAR EL action ↘ --}}
    <form action="{{isset($editVenta) && !is_null($editVenta) ? route('ventas.update',$editVenta->ventaId) : $a}}" method="{{$m}}">
        @csrf
                    {{-- ↙ IMPORTANTE RECORDAR EL @method('PUT') --}}
        @if (isset($editVenta))
            @method('PUT')
        @endif
        <x-input-form name="id" leyenda="" type="hidden" value="{{!is_null($editVenta)?$editVenta->ventaId:0}}" />
        <x-input-form name="fecha_realizada" leyenda="Fecha" type="date" value="{{!is_null($editVenta)?$editVenta->fecha_realizada:0}}" />
        <x-input-form name="precio_total" leyenda="Precio" type="number" value="{{!is_null($editVenta)?$editVenta->precio_total:0}}" />
        <x-select-form name="auto_Id" leyenda="Autos registrados" :options=$optionsAutos/>
        <x-select-form name="cliente_Id" leyenda="Clientes registrados" :options=$optionsClientes/>
        <button class="btn btn-outline-dark" type="submit">CARGAR</button>
    </form>
</div>