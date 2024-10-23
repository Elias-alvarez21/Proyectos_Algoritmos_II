<h1 class="mb-4">Lista de Clientes</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
             @foreach ($clientes as $cliente)
                <x-cliente-row :cliente=$cliente />
               @endforeach
            </tbody>
        </table>
    