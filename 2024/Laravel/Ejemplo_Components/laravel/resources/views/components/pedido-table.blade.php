<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Total</th>
            <th>Generado</th>
        </tr>
    </thead>
    <tbody>
     @foreach ($pedidos as $pedido)
        <x-pedido-row :pedido=$pedido />
       @endforeach
    </tbody>
</table>