<div>
    <tr>
        <td>
          {{-- @dd($L) --}}
           <form action="{{route('ventas.show', $libro->libroId)}}" method="GET">
            <button type="submit" class="btn btn-outline-secondary btn-sm">
              <i class="fas fa-edit"> Ventas</i>
            </button>
          </form>
          </td>
            <td>{{$libro->libroId}}</td>
            <td><div class="card" style="width: 18rem;">
              <img src="{{ Storage::url("imagenes/".$libro->IMG_ruta) }}" class="card-img-top" alt="Imagen del libro">
              </div></td>
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->autor_Id}}</td>
            <td>{{$libro->categoria_Id}}</td>
            <td>{{$libro->precio}}</td>
            <td><div  class="d-inline">
              <form action="{{route('libros.edit',[$libro->libroId])}}" method="GET">
              <button type="submit" class="btn btn-outline-primary btn-sm">
                Editar
              </button>
            </form> 
            <form action="{{route('libros.delete', $libro->libroId)}}" method="GET">
              @csrf   @method("DELETE")
              <button type="submit" class="btn btn-outline-danger btn-sm">
                  Eliminar
              </button>
            </form>
          </div>
          </td>
        </tr>
</div>