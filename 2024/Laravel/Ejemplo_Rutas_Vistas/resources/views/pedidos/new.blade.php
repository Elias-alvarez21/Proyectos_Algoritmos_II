<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en Línea con Bootstrap 5.3</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
       
            <h1 class="mb-4">Listado de Pedidos</h1>

            @if(@session('message'))
                <div class="alert alert-success" role="alert">
                   @php echo @session('message') @endphp </div>
            @endif


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
                    <tr>
                        <td>{{$pedido->pedidoId}}</td>
                        <td>{{$pedido->fecha}}</td>
                        <td>{{$pedido->total}}</td>
                        <td>{{$pedido->generated_at}}</td>
                       </tr>
                   @endforeach
                </tbody>
            </table>

    
        
            <div class="card card-body">
                <form id="formPedido" action="{{ route('pedido.store') }}" method="POST">
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-md-3 mb-3">
                            <label for="fechaInput" class="form-label">Fecha</label>
                            <input type="date" class="form-control" name="fecha" id="fechaInput">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="precioInput" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="precioInput" name="precio" step="0.01" min="0">
                        </div>
                        <input type="hidden" name="idcliente" value="{{ $id }}">
                        <div class="col-md-3 mb-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
