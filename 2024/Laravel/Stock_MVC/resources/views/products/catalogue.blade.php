@extends('layout')

@section('content')
<div class="modal fade" id="ProductModal" tabindex="-1" role="dialog" aria-labelledby="ProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ProductModalLabel">PRODUCTOS</h5>
        </div>
        <div class="modal-body">
            <form id ="frmProduct" method="POST" action="{{ route('products.store')}}">
             @csrf
          <div class="form-row">
               <div class="form-group col-auto">
               <label for="category">Categoría</label>
               <select id="category" name="category" class="form-control">
                @foreach($categories as $category)
                   <option value="{{$category->idcategory}}">{{$category->description}}</option>
                @endforeach
               </select>
           </div>
           </div>
          <div class="form-row">
           <div class="form-group col-auto">
                <label for="denomination">DENOMINACIÓN</label>
                <input type="text" class="form-control" id="denomination" name = "denomination" placeholder = "Texto entre 5 y 100 caracteres" required>
            </div>
            <div class="form-group col-auto">
              <label for="price">PRECIO</label>
              <input type="text" class="form-control" id="price" name = "price" placeholder = "00.00" required>
          </div>
          </div>
          <div class="form-row">
            <div class="form-group co-auto">
               <label for="info">INFORMACIÓN ADICIONAL</label>
               <textarea type="text" class="form-control" id="info" name = "info" maxlenght="255" required></textarea>
           </div>
           </div>
           <div class="form-row">
           <div class="form-group col-auto">
              <label for="stock">STOCK</label>
              <input type="number" class="form-control" id="stock" min = "0" name = "stock" required>
          </div>
</div>
       <hr>
       <input id="idproduct" name="idproduct" type="hidden" value="0">
       <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>Aceptar</button>   
    
  </form>
        </div>
        <div class="modal-footer">
             <button type="button" class="btn btn-info" data-bs-dismiss="modal"><i class="fas fa-times"></i>Cerrar</button>
        </div>
      </div>
  </div>
  </div>

          <div class="row">
                <div class="col-sm-12 mx-auto">
                    <table id="productsTable" class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <td style="display:none">ID</th>
                                <th>CATEGORÍA</th>    
                                <th>DENOMINACIÓN</th>
                                <th>INFORMACIÓN</th>
                                <th>PRECIO</th>
                                <th>STOCK</th>
                                <th>MOVIMIENTOS</th>
                                <th>ESTADO</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr id ="{{ $product->idproduct }}">
                                <td>{{ $product->idproduct }}</td>
                                <td style="display:none">{{$product->idcategory }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->denomination }}</td>
                                <td>{{ $product->additional_info }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>
                                <td style="text-align:center; font-size:20px"><span class="badge rounded-pill bg-primary">{{ $product->q_movements }}</span></td>
                                <td>
                                @if ($product->enabled == 1)
                                <i style="color:green" class="fas fa-check-circle fa-2x"></i>
                                @else
                                <i style="color:red" class="fas fa-exclamation-circle fa-2x"></i>    
                                @endif
                                </td>
                                <td style="text-align:center;"><a href="{{ route('movements.index', $product->idproduct) }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"><i class="fas fa-table" aria-hidden="true"></i></a></td>
                                <td style="text-align:center;"><button data-bs-toggle="modal" data-bs-target="#ProductModal" id = 'btnEdit' class='btn btn-warning btn-sm'><i class="fas fa-edit" aria-hidden="true"></i></button>
                                <td style="text-align:center;"><button id = 'btnState' class='btn btn-secondary btn-sm' onclick='UpdateState({{$product->idproduct}})'><i class="fas fa-power-off" aria-hidden="true"></i></button>    
                                <td style="text-align:center;">
                                   <form action="{{ route('products.destroy', $product->idproduct) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('¿Desea eliminar el producto {{$product->denomination}}?')"><i class="fas fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </td>
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex">
                {{ $products->links() }}
            </div>
                </div>
            </div>
            <div class="row">
        <div class="col"><hr></div>
    </div>
    <div class="row justify-content-center">
              <div class="col text-center">
               <button id = "btnNuevo" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#ProductModal" onclick="$('#frmProduct')[0].reset(); $('#idproduct').val(0);"><i class="fab fa-product-hunt fa-2x" aria-hidden="true"></i></button>
    </div>
   </div> 
                
<script>

$( document ).ready(function() {
    
$('#productsTable tbody').on( 'click', '#btnEdit', function () {
    var row = $(this).closest('tr');
    $('#idproduct').val(row.attr('id'));
    $('#category').val(row.find("td").eq(1).html()); 
    $('#denomination').val(row.find("td").eq(3).html()); 
    $('#info').val(row.find("td").eq(4).html()); 
    $('#price').val(row.find("td").eq(5).html()); 
    $('#stock').val(row.find("td").eq(6).html()); 
});

});

function UpdateState(id) {
    var url ='{{ route("products.state", ":id") }}';
    url = url.replace(':id', id);     
    var token = $("meta[name='csrf-token']").attr("content");
    $.ajax({
        url:  url,
        type: "PATCH",
        dataType: "json",
        data: { "_token": token},
        success: function (data) {
                $('#message').html('<svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></symbol></svg><div id="alert"><div class="alert alert-success d-flex alert-dismissible fade show align-items-center" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg><div>' + data.message + '</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div></div>');
                setTimeout(function () {
                location.reload(true);
                }, 1000);
            }
});
}
</script>
@endsection