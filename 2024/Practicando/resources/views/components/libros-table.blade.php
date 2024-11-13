    <body>
        <div class="container mt-5">
            <h1>Libros</h1>
            <form action="{{route('libros.create')}}" method="GET">
              <button type="submit" class="btn btn-outline-light btn-sm">
                <i class="fas fa-edit"></i> NUEVO REGISTRO
              </button>
            </form><br>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th></th>
                <th>ID Libro</th>
                <th></th>
                <th>Info</th>
                <th>BOTONES</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($libros as $libro)
             {{-- @dd($L) --}}
                <x-libros-row :libro=$libro />
              @endforeach
            </tbody>
          </table>
        </div>
    </body>
</html>

</div>