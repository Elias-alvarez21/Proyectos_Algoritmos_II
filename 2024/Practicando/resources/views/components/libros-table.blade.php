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
                <th>Titulo</th>
                <th>Autor</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>BOTONES</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($libros as $libro)
             {{-- @dd($L) --}}
                <x-libros-row :libro=$libro />
                          {{-- <form action="{{route('libros.edit',[$L->libroId])}}" method="GET">
                          <button type="submit" class="btn btn-outline-primary btn-sm">
                            Editar
                          </button>
                        </form> 
                        {{-- <form action="{{route('libros.delete', $L->libroId)}}" method="GET">
                          <button type="submit" class="btn btn-outline-danger btn-sm">
                              Eliminar
                          </button>
                        </form>
                      </div>
                      </td>
                    </tr> --}}
              @endforeach
            </tbody>
          </table>
        </div>
    </body>
</html>

</div>