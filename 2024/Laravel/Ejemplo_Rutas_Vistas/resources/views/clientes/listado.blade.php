<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        @if(@session('message'))
        <div class="alert alert-danger" role="alert">
           @php echo @session('message') @endphp </div>
    @endif

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
                <tr>
                    <td>{{$cliente->clienteId}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->email}}</td>
                    <td><i class="fas fa-phone"></i> +{{$cliente->telefono}}</td>
                    <td>{{$cliente->direccion}}</td>
                    <td><a href="{{route('pedido.create', $cliente->clienteId)}}"><button class="btn btn-primary">NUEVO</button></a></td>
                    <td><form action="{{route('clientes.destroy', $cliente->clienteId)}}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">ELIMINAR</button></form></td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (Opcional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
