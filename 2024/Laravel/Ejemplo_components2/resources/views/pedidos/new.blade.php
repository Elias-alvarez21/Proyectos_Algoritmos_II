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
       
            <h1 class="mb-4">Listado de Pedidos del Cliente {{$id}}</h1>

            @if(@session('message'))
                <div class="alert alert-success" role="alert">
                   @php echo @session('message') @endphp </div>
            @endif


            <x-pedido-table :pedidos=$pedidos />

    
        
            <div class="card card-body">
               <x-container-form method="POST" action="{{route('pedido.store')}}" id={{$id}} />
            </div>
        </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
