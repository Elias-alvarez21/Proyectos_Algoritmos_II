<form action="{{$action}}" method="POST">
    @csrf
    @if($method=='PUT')
        @method('PUT')
    @endif
    <x-form-field type="text" name="nombre" label="Nombre del Cliente" value="{{ $cliente->nombre ?? ''}}" />
    <x-form-field type="email" name="email" label="Correo Electrónico" value="{{ $cliente->email ?? ''}}" />
    <x-form-field type="text" name="telefono" label="Teléfono Móvil" value="{{ $cliente->telefono ?? ''}}" />
    <x-form-field type="text" name="direccion" label="Dirección" value="{{ $cliente->direccion ?? ''}}" />
    <x-form-field type="hidden" name="clienteId" label="" value="{{ $cliente->clienteId ?? ''}}" />    
    <button class="btn btn-success" type="submit">{{isset($cliente->clienteId) ? "ACTUALIZAR" : "CREAR"}}</button>    
</form>