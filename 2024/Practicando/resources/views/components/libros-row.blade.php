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
              <img src="{{ Storage::url($libro->IMG_ruta) }}" class="card-img-top" alt="Imagen del libro">
              </div></td>
            <td><b>Titulo: </b>{{$libro->titulo}}<br>
              <b>Autor: </b>{{$libro->autor}} <br>
              <b>Genero: </b>{{$libro->categoria}} <b>Precio:</b>{{$libro->precio}}
            </td>
            <td><div  class="d-inline">
              <form action="{{route('libros.edit',[$libro->libroId])}}" method="GET">
              <button type="submit" class="btn btn-outline-primary btn-sm">
                Editar
              </button>
            </form><br>
            <form action="{{route('libros.delete', $libro->libroId)}}" method="POST ">
              @csrf   @method("DELETE")
              <button type="submit" class="btn btn-outline-danger btn-sm">
                  Eliminar
              </button>
            </form>
          </div>
          </td>
        </tr>
</div>