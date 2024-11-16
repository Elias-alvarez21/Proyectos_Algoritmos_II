@props(['array', 'tipo'])
    <body>
        <div class="container mt-5">
          <h1>{{ ($tipo == "libros") ? "Libros" : (($tipo == "Autores") ? "Autores" : "Ventas") }}</h1>

            
            <form action="{{route('libros.create')}}" method="GET">
              <button type="submit" class="btn btn-outline-light btn-sm">
                <i class="fas fa-edit"></i> NUEVO REGISTRO
              </button>
            </form><br>
        <table class="table">
            <thead class="thead-dark">
              <tr>
               @if($tipo == "libros")
                 <th>#</th><th>ID Libro</th><th></th><th>Info</th><th>BOTONES</th>
              @elseif ($tipo == "autores")
                 <th>#</th><th>Nombre</th><th>Nacionalidad</th>
              @else
                <th>#</th><th>Libro</th><th>Fecha</th><th>Total</th>
              @endif
              </tr>
            </thead>
            <tbody>
              
            @foreach ($array as $a)
             {{-- @dd($L) --}}
             
            @if($tipo =="libros")
              <x-libros-row :libro=$a />               
            @elseif ($tipo == "autores")
              <x-autores-row :autor=$a />
            @else
              <x-ventas-row :venta=$a />
            @endif        
            @endforeach
            </tbody>
          </table>
        </div>
    </body>
</html>

</div>