<header>
    <style>
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>
</header>
<body>
    <div class="container mt-5">
        <div class="header">
            <h1>Ventas Registradas</h1>
            <form action="{{ route('ventas.create') }}">
                <button type="submit" class="btn btn-outline-light">REGISTRAR UNA VENTA</button>
            </form>
        </div>
    </div>
    <div>
        <div class="table-responsive">
            <table  class="table table-primary" >
                <thead>
                    <tr>
                        <th>BOTONES</th>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Precio</th>
                        <th>Auto</th>
                        <th>Cliente</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($ventas) --}}
                    @foreach ($todos as $todo)
                        <x-t-body :todo=$todo />
                    @endforeach 
                </tbody>
            </table>
        </div>
        
        </div>
</body>